<?php
namespace App\Http\Controllers;

use App\Services\ShopifyStorefrontService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShopController extends Controller
{
    public function __construct(private ShopifyStorefrontService $shopify) {}

    public function index()
    {
        $collections = Cache::remember('collections:all', now()->addMinutes(30), function () {
            $data = $this->shopify->query('{
                collections(first: 20) {
                    edges {
                        node {
                            id title handle description
                            image { url altText }
                        }
                    }
                }
            }');
            return collect($data['data']['collections']['edges'])
                ->map(fn($e) => $e['node'])
                ->filter(fn($c) => !in_array($c['handle'], ['frontpage', 'healthcare-example-products']))
                ->values();
        });

        return view('shop.index', compact('collections'));
    }

    public function collection(string $handle, Request $request)
    {
        $cursor = $request->query('cursor');
        $data = $this->shopify->query('
            query($handle: String!, $first: Int!, $after: String) {
                collectionByHandle(handle: $handle) {
                    title
                    products(first: $first, after: $after) {
                        pageInfo { hasNextPage endCursor }
                        edges {
                            node {
                                id title handle
                                priceRange { minVariantPrice { amount currencyCode } }
                                images(first: 1) { edges { node { url altText } } }
                            }
                        }
                    }
                }
            }',
            ['handle' => $handle, 'first' => 24, 'after' => $cursor ?? null]
        );
        $collection = $data['data']['collectionByHandle'];
        $products = collect($collection['products']['edges'])->map(fn($e) => $e['node']);
        $pageInfo = $collection['products']['pageInfo'];
        return view('shop.collection', compact('collection', 'products', 'pageInfo', 'handle'));
    }
public function product(string $collection, string $handle)
{
    $data = $this->shopify->query('
        query($handle: String!) {
            productByHandle(handle: $handle) {
                id title description
                images(first: 10) { edges { node { url altText } } }
                options { name values }
                variants(first: 100) {
                    edges {
                        node {
                            id title availableForSale
                            price { amount currencyCode }
                            selectedOptions { name value }
                        }
                    }
                }
            }
        }',
        ['handle' => $handle]
    );
    $product = $data['data']['productByHandle'];
    if (!$product) abort(404);
    $variants = collect($product['variants']['edges'])->map(fn($e) => $e['node'])->toArray();
    return view('shop.product', compact('product', 'variants', 'collection', 'handle'));
}
}
