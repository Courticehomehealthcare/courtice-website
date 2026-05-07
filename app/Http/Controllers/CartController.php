<?php
namespace App\Http\Controllers;

use App\Services\ShopifyStorefrontService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(private ShopifyStorefrontService $shopify) {}

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $variantId = $request->input('variantId');
        $qty = (int) $request->input('quantity', 1);

        if (isset($cart[$variantId])) {
            $cart[$variantId]['quantity'] += $qty;
        } else {
            $cart[$variantId] = [
                'variantId' => $variantId,
                'quantity'  => $qty,
                'title'     => html_entity_decode($request->input('title')),
                'price'     => $request->input('price'),
                'image'     => $request->input('image'),
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['count' => count($cart), 'success' => true]);
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->input('variantId')]);
        session()->put('cart', $cart);
        return back();
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) return back()->with('error', 'Your cart is empty.');

        $lineItems = collect($cart)->map(fn($item) => [
            'merchandiseId' => $item['variantId'],
            'quantity'      => $item['quantity'],
        ])->values()->toArray();

        $mutation = <<<GQL
        mutation CreateCart(\$lines: [CartLineInput!]!) {
            cartCreate(input: { lines: \$lines }) {
                cart {
                    id
                    checkoutUrl
                }
                userErrors {
                    field
                    message
                }
            }
        }
        GQL;

        $response = $this->shopify->query($mutation, ['lines' => $lineItems]);

        if (!isset($response['data']['cartCreate'])) {
            return back()->with('error', 'Checkout unavailable. Please try again.');
        }

        $errors = $response['data']['cartCreate']['userErrors'];
        if (!empty($errors)) {
            return back()->with('error', $errors[0]['message']);
        }

        $checkoutUrl = $response['data']['cartCreate']['cart']['checkoutUrl'];
        session()->forget('cart');
        return redirect($checkoutUrl);
    }
}
