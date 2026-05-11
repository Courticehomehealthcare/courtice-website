<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Carousel;
use App\Models\ClientImage;
use App\Models\SlidingText;

use App\Services\ShopifyStorefrontService;

class HomeController extends Controller
{
    public function __construct(private ShopifyStorefrontService $shopify)
    {
    }
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function index4()
    {
        $carousels = Carousel::where('page', 'home')->orWhereNull('page')->orderByDesc('id')->get();
        $aboutCarousels = Carousel::where('page', 'aboutus')->orderByDesc('id')->get();
        $clientImages = ClientImage::orderByDesc('clientid')->get();

        $featuredServices = Service::where('status', 1)
            ->whereIn('pagecategory', ['services', 'productrentals'])
            ->orderByDesc('created_at')
            ->take(9)
            ->get();

        $featuredProductServices = Service::where('status', 1)
            ->where('pagecategory', 'products')
            ->orderByDesc('created_at')
            ->get();

        $shopifyData = $this->shopify->query('{
            products(first: 8) {
                edges {
                    node {
                        id title handle
                        priceRange { minVariantPrice { amount } }
                        images(first: 1) { edges { node { url } } }
                        availableForSale
                    }
                }
            }
        }');

        $featuredProducts = collect($shopifyData['data']['products']['edges'])->map(fn($e) => (object) [
            'name' => $e['node']['title'],
            'slug' => $e['node']['handle'],
            'price' => $e['node']['priceRange']['minVariantPrice']['amount'],
            'main_image' => $e['node']['images']['edges'][0]['node']['url'] ?? null,
            'is_available' => $e['node']['availableForSale'] ?? false
        ]);

        $homeFaqs = Faq::where('page', 'home')
            ->orWhereJsonContains('page', 'home')
            ->orWhereNull('page')
            ->orderByDesc('created_at')
            ->take(4)
            ->get();

        $blogs = Blog::where('visible', 1)
            ->orderByDesc('last_updated')
            ->take(3)
            ->get();

        $slidingTexts = SlidingText::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('index4', compact('featuredServices', 'featuredProductServices', 'featuredProducts', 'homeFaqs', 'blogs', 'carousels', 'aboutCarousels', 'slidingTexts', 'clientImages'));
    }
    public function index5()
    {
        return view('index5');
    }
    public function index_dark()
    {
        return view('index-dark');
    }
    public function index_one_page()
    {
        return view('index-one-page');
    }
    public function index2_one_page()
    {
        return view('index2-one-page');
    }
    public function index3_one_page()
    {
        return view('index3-one-page');
    }
    public function index4_one_page()
    {
        return view('index4-one-page');
    }
    public function index5_one_page()
    {
        return view('index5-one-page');
    }
}
