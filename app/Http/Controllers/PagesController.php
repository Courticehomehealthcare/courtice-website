<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactThankYou;
use Illuminate\Http\Request;

use App\Services\ShopifyStorefrontService;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function __construct(private ShopifyStorefrontService $shopify) {}
    public function about()
    {
        return view('pages/about');
    }
    public function doctor()
    {
        return view('pages/doctor');
    }
    public function doctor_carousel()
    {
        return view('pages/doctor-carousel');
    }
    public function doctor_details()
    {
        return view('pages/doctor-details');
    }
    public function project()
    {
        return view('pages/project');
    }
    public function project_carousel()
    {
        return view('pages/project-carousel');
    }
    public function project_details()
    {
        return view('pages/project-details');
    }
    public function testimonials()
    {
        return view('pages/testimonials');
    }
    public function testimonial_carousel()
    {
        return view('pages/testimonial-carousel');
    }
    public function pricing()
    {
        return view('pages/pricing');
    }
    public function appoinment()
    {
        return view('pages/appoinment');
    }
    public function faq()
    {
        return view('pages/faq');
    }
    public function services()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $services = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderBy('ServicesTitle')
            ->get();
        $servicesFaqs = \App\Models\Faq::where('page', 'services')
            ->orWhereJsonContains('page', 'services')
            ->orderByDesc('created_at')
            ->get();

        return view('pages/services', compact('services', 'banners', 'servicesFaqs'));
    }
    public function service_carousel()
    {
        return view('pages/service-carousel');
    }
    public function service_details($slug)
    {
        $service = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->where('servicesUrl', $slug)
            ->first();

        if (!$service) {
            $service = Service::where('status', 1)
                ->where('pagecategory', 'services')
                ->get()
                ->first(function ($item) use ($slug) {
                    return Str::slug($item->ServicesTitle) === $slug;
                });
        }

        abort_unless($service, 404);

        $services = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderBy('ServicesTitle')
            ->get();

        return view('pages/service-details', compact('service', 'services'));
    }
    public function collections()
    {
        $data = $this->shopify->query('
            query($first: Int!) {
                products(first: $first) {
                    edges {
                        node {
                            id title handle description
                            priceRange { minVariantPrice { amount currencyCode } }
                            compareAtPriceRange { minVariantPrice { amount } }
                            images(first: 1) { edges { node { url altText } } }
                        }
                    }
                }
                collections(first: 20) {
                    edges {
                        node { title handle image { url } }
                    }
                }
            }',
            ['first' => 24]
        );

        $is_root = true;
        $category = (object)[
            'categoriename' => 'Shop All Categories',
            'slug' => 'all-products',
            'meta_title' => 'Shop All Categories',
            'meta_description' => 'Explore our categories of home health care products.',
            'meta_keywords' => 'home health care, medical supplies, mobility aids'
        ];

        $products = collect($data['data']['products']['edges'])->map(function($e) {
            $currentPrice = $e['node']['priceRange']['minVariantPrice']['amount'];
            $comparePrice = $e['node']['compareAtPriceRange']['minVariantPrice']['amount'] ?? null;
            
            return (object)[
                'id' => $e['node']['id'],
                'name' => $e['node']['title'],
                'slug' => $e['node']['handle'],
                'description' => $e['node']['description'] ?? '',
                'price' => $comparePrice ?: $currentPrice,
                'sale_price' => $comparePrice ? $currentPrice : null,
                'main_image' => $e['node']['images']['edges'][0]['node']['url'] ?? null
            ];
        });

        $categories = collect($data['data']['collections']['edges'])->map(fn($e) => (object)[
            'categoriename' => $e['node']['title'],
            'slug' => $e['node']['handle'],
            'image' => $e['node']['image']['url'] ?? asset('assets/images/resources/no-image.jpg')
        ]);

        return view('pages/products', compact('category', 'products', 'categories', 'is_root'));
    }
    public function products($slug)
    {
        $data = $this->shopify->query('
            query($handle: String!, $first: Int!) {
                collectionByHandle(handle: $handle) {
                    title
                    description
                    seo { title description }
                    products(first: $first) {
                        edges {
                            node {
                                id title handle description
                                priceRange { minVariantPrice { amount currencyCode } }
                                compareAtPriceRange { minVariantPrice { amount } }
                                images(first: 1) { edges { node { url altText } } }
                            }
                        }
                    }
                }
                collections(first: 20) {
                    edges {
                        node { title handle }
                    }
                }
            }',
            ['handle' => $slug, 'first' => 24]
        );

        $collectionData = $data['data']['collectionByHandle'];
        if (!$collectionData) abort(404);

        $category = (object)[
            'categoriename' => $collectionData['title'],
            'slug' => $slug,
            'meta_title' => $collectionData['seo']['title'] ?? $collectionData['title'],
            'meta_description' => $collectionData['seo']['description'] ?? Str::limit(strip_tags($collectionData['description'] ?? ''), 160),
            'meta_keywords' => ''
        ];

        $products = collect($collectionData['products']['edges'])->map(function($e) {
            $currentPrice = $e['node']['priceRange']['minVariantPrice']['amount'];
            $comparePrice = $e['node']['compareAtPriceRange']['minVariantPrice']['amount'] ?? null;
            
            return (object)[
                'id' => $e['node']['id'],
                'name' => $e['node']['title'],
                'slug' => $e['node']['handle'],
                'description' => $e['node']['description'] ?? '',
                'price' => $comparePrice ?: $currentPrice,
                'sale_price' => $comparePrice ? $currentPrice : null,
                'main_image' => $e['node']['images']['edges'][0]['node']['url'] ?? null
            ];
        });

        $categories = collect($data['data']['collections']['edges'])->map(fn($e) => (object)[
            'categoriename' => $e['node']['title'],
            'slug' => $e['node']['handle'],
            'image' => $e['node']['image']['url'] ?? asset('assets/images/resources/no-image.jpg')
        ]);

        $is_root = false;
        return view('pages/products', compact('category', 'products', 'categories', 'is_root'));
    }
    public function product_details($slug)
    {
        $data = $this->shopify->query('
            query($handle: String!) {
                productByHandle(handle: $handle) {
                    id title description handle
                    images(first: 10) { edges { node { url altText } } }
                    options { name values }
                    variants(first: 100) {
                        edges {
                            node {
                                id title availableForSale
                                price { amount currencyCode }
                                compareAtPrice { amount }
                                selectedOptions { name value }
                            }
                        }
                    }
                    collections(first: 1) { edges { node { title handle } } }
                }
            }',
            ['handle' => $slug]
        );

        $productData = $data['data']['productByHandle'];
        if (!$productData) abort(404);

        $mainVariant = $productData['variants']['edges'][0]['node'] ?? null;
        $currentPrice = $mainVariant['price']['amount'] ?? null;
        $comparePrice = $mainVariant['compareAtPrice']['amount'] ?? null;

        $product = (object)[
            'id' => $productData['id'],
            'name' => $productData['title'],
            'slug' => $productData['handle'],
            'description' => $productData['description'],
            'small_description' => Str::limit(strip_tags($productData['description']), 160),
            'main_image' => $productData['images']['edges'][0]['node']['url'] ?? null,
            'price' => $comparePrice ?: $currentPrice,
            'sale_price' => $comparePrice ? $currentPrice : null,
            'images' => collect($productData['images']['edges'])->skip(1)->map(fn($e) => (object)['image' => $e['node']['url']]),
            'category' => (object)[
                'categoriename' => $productData['collections']['edges'][0]['node']['title'] ?? 'Shop',
                'slug' => $productData['collections']['edges'][0]['node']['handle'] ?? 'shop'
            ],
            'meta_title' => $productData['title'],
            'meta_description' => Str::limit(strip_tags($productData['description']), 160),
            'meta_keywords' => '',
            'shopify_options' => $productData['options'],
            'shopify_variants' => collect($productData['variants']['edges'])->map(fn($e) => $e['node'])
        ];

        // Fetch related products (simulated from same collection)
        $relatedProducts = collect();
        if (isset($productData['collections']['edges'][0])) {
            $relData = $this->shopify->query('
                query($handle: String!) {
                    collectionByHandle(handle: $handle) {
                        products(first: 5) {
                            edges {
                                node {
                                    id title handle
                                    priceRange { minVariantPrice { amount } }
                                    compareAtPriceRange { minVariantPrice { amount } }
                                    images(first: 1) { edges { node { url } } }
                                }
                            }
                        }
                    }
                }',
                ['handle' => $product->category->slug]
            );
            $relatedProducts = collect($relData['data']['collectionByHandle']['products']['edges'])
                ->map(fn($e) => $e['node'])
                ->filter(fn($p) => $p['handle'] !== $slug)
                ->take(4)
                ->map(function($p) {
                    $currentPrice = $p['priceRange']['minVariantPrice']['amount'];
                    $comparePrice = $p['compareAtPriceRange']['minVariantPrice']['amount'] ?? null;
                    
                    return (object)[
                        'name' => $p['title'],
                        'slug' => $p['handle'],
                        'price' => $comparePrice ?: $currentPrice,
                        'sale_price' => $comparePrice ? $currentPrice : null,
                        'main_image' => $p['images']['edges'][0]['node']['url'] ?? null
                    ];
                });
        }
            
        return view('pages/product-details', compact('product', 'relatedProducts'));
    }
    public function wishlist()
    {
        return view('pages/wishlist');
    }
    public function sign_up()
    {
        return view('pages/sign-up');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function blog()
    {
        $blogs = \App\Models\Blog::where('visible', 1)->latest()->get();
        return view('pages/blog', compact('blogs'));
    }
    public function blog_carousel()
    {
        return view('pages/blog-carousel');
    }
    public function blog_list()
    {
        return view('pages/blog-list');
    }
    public function blog_list_2()
    {
        return view('pages/blog-list-2');
    }
    public function blog_details($slug)
    {
        $blog = \App\Models\Blog::where('blogurl', $slug)->where('visible', 1)->firstOrFail();
        $recentBlogs = \App\Models\Blog::where('visible', 1)->where('id', '!=', $blog->id)->latest()->take(3)->get();
        return view('pages/blog-details', compact('blog', 'recentBlogs'));
    }
    public function contact()
    {
        return view('pages/contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        ContactUs::create([
            'Firstname' => $validated['first_name'],
            'Lastname' => $validated['last_name'] ?? null,
            'Phoneno' => $validated['phone'],
            'Emailaddress' => $validated['email'],
            'Location' => null,
            'Qualification' => $validated['subject'] ?? 'Contact Request',
            'Message' => $validated['message'] ?? null,
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('Attempting to send contact form emails.');
            
            // Get admin email from .env, settings, or fallback
            $siteSettings = \App\Models\DynamicContent::first();
            $adminEmail = env('ADMIN_EMAIL', $siteSettings->email ?? 'support@courticehomehealthcare.com');
            
            // 1. Notification to Admin with all form details
            $mail = \Illuminate\Support\Facades\Mail::to($adminEmail);
            
            if (env('MAIL_CC_ADDRESS')) {
                $mail->cc(env('MAIL_CC_ADDRESS'));
            }

            $mail->send(new ContactFormSubmitted($validated));
            \Illuminate\Support\Facades\Log::info('Admin notification email sent to: ' . $adminEmail);

            // 2. Thank you email to the User (the person who filled the form)
            \Illuminate\Support\Facades\Mail::to($validated['email'])
                ->send(new ContactThankYou($validated));
            \Illuminate\Support\Facades\Log::info('Thank you email sent to: ' . $validated['email']);

        } catch (\Exception $e) {
            // Log error if mail fails, but don't block the user
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage(), [
                'exception' => $e
            ]);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you for contacting us.']);
        }

        return back()->with('success', 'Thank you for contacting us.');
    }






    public function not_found()
    {
        return view('pages/404');
        return redirect()->route('404');
    }
}
