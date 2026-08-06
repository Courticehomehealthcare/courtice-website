<?php
namespace App\Http\Controllers;

use App\Services\ShopifyStorefrontService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /** Maximum allowed for online checkout (CAD). Larger orders: call or visit the store. */
    private const ONLINE_ORDER_LIMIT = 200;

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
        $qty = max(1, min(20, (int) $request->input('quantity', 1)));

        if (isset($cart[$variantId])) {
            $cart[$variantId]['quantity'] = min(20, $cart[$variantId]['quantity'] + $qty);
        } else {
            $cart[$variantId] = [
                'variantId' => $variantId,
                'quantity'  => $qty,
                'title'     => html_entity_decode($request->input('title')),
                'price'     => $request->input('price'),
                'image'     => $request->input('image'),
                'slug'      => $request->input('slug'),
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['count' => count($cart), 'success' => true]);
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $variantId = $request->input('variantId');

        if (isset($cart[$variantId])) {
            $change = (int) $request->input('change', 0);
            $newQty = $cart[$variantId]['quantity'] + $change;

            if ($newQty < 1) {
                unset($cart[$variantId]);
            } else {
                $cart[$variantId]['quantity'] = min(20, $newQty);
            }
            session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }


    public function buyNow(Request $request)
    {
        $variantId = $request->input('variantId');
        $qty = max(1, min(20, (int) $request->input('quantity', 1)));
        if (!$variantId) {
            return response()->json(['error' => 'Missing product variant.'], 422);
        }

        // Verify price server-side and enforce the online order limit
        $priceData = $this->shopify->query(
            'query($id: ID!) { node(id: $id) { ... on ProductVariant { price { amount } } } }',
            ['id' => $variantId]
        );
        $amount = (float) ($priceData['data']['node']['price']['amount'] ?? 0);
        if ($amount > 0 && ($amount * $qty) > self::ONLINE_ORDER_LIMIT) {
            return response()->json(['error' =>
                'Online orders are limited to $' . self::ONLINE_ORDER_LIMIT .
                '. Please call +1 (905) 721-0004 or visit our Courtice store for larger purchases.']);
        }

        $mutation = <<<GQL
        mutation CreateCart(\$lines: [CartLineInput!]!) {
            cartCreate(input: { lines: \$lines }) {
                cart { id checkoutUrl }
                userErrors { field message }
            }
        }
        GQL;

        $response = $this->shopify->query($mutation, ['lines' => [[
            'merchandiseId' => $variantId,
            'quantity'      => $qty,
        ]]]);

        if (!isset($response['data']['cartCreate'])) {
            return response()->json(['error' => 'Checkout unavailable. Please try again.']);
        }
        $errors = $response['data']['cartCreate']['userErrors'];
        if (!empty($errors)) {
            return response()->json(['error' => $errors[0]['message']]);
        }

        return response()->json(['url' => $response['data']['cartCreate']['cart']['checkoutUrl']]);
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

        // Business rule: online orders capped at $200 — larger orders in-store or by phone
        $subtotal = collect($cart)->sum(fn($i) => $i['price'] * $i['quantity']);
        if ($subtotal > self::ONLINE_ORDER_LIMIT) {
            return back()->with('error',
                'Online orders are limited to $' . self::ONLINE_ORDER_LIMIT .
                '. Please call us at +1 (905) 721-0004 or visit our Courtice store for larger purchases.');
        }

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
