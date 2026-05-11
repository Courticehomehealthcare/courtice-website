<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;
use App\Models\StaticPage;
use Illuminate\Support\Str;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactThankYou;
use Illuminate\Http\Request;

use App\Services\ShopifyStorefrontService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

    public function service_rentals()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $allServices = Service::where('status', 1)->where('pagecategory', 'services')->orderBy('ServicesTitle')->get();
        
        $landingService = Service::where('servicesUrl', 'product-rentals')
            ->orWhere('ServicesTitle', 'like', '%Product Rentals%')
            ->first();

        $services = Service::where('status', 1)
            ->whereIn('pagesubcategory', ['Rentals', 'productrentals'])
            ->where('Serviceid', '!=', $landingService ? $landingService->Serviceid : 0)
            ->orderBy('ServicesTitle')
            ->get();
            
        return view('pages/services-rentals', compact('services', 'banners', 'landingService', 'allServices'));
    }

    public function service_online()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $allServices = Service::where('status', 1)->where('pagecategory', 'services')->orderBy('ServicesTitle')->get();
        
        $landingService = Service::where('servicesUrl', 'online-in-store-shipping-options')
            ->orWhere('ServicesTitle', 'like', '%Online % In-Store Shipping%')
            ->first();

        $services = Service::where('status', 1)
            ->where(function($q) {
                $q->where('pagesubcategory', 'Online Shopping')
                  ->orWhere('pagesubcategory', 'Online & In-Store Shipping Options');
            })
            ->where('Serviceid', '!=', $landingService ? $landingService->Serviceid : 0)
            ->orderBy('ServicesTitle')
            ->get();
            
        return view('pages/services-online', compact('services', 'banners', 'landingService', 'allServices'));
    }

    public function service_instore()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $allServices = Service::where('status', 1)->where('pagecategory', 'services')->orderBy('ServicesTitle')->get();
        
        $landingService = Service::where('servicesUrl', 'online-in-store-shipping-options')
            ->orWhere('ServicesTitle', 'like', '%Online % In-Store Shipping%')
            ->first();

        $services = Service::where('status', 1)
            ->where(function($q) {
                $q->where('pagesubcategory', 'In-Store Shopping')
                  ->orWhere('pagesubcategory', 'Online & In-Store Shipping Options');
            })
            ->where('Serviceid', '!=', $landingService ? $landingService->Serviceid : 0)
            ->orderBy('ServicesTitle')
            ->get();
            
        return view('pages/services-instore', compact('services', 'banners', 'landingService', 'allServices'));
    }

    public function service_breast_pumps()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $allServices = Service::where('status', 1)->where('pagecategory', 'services')->orderBy('ServicesTitle')->get();
        
        $landingService = Service::where('ServicesTitle', 'like', '%Breast Pump%')->first();

        $services = Service::where('status', 1)
            ->where('pagesubcategory', 'Breast Pumps')
            ->where('Serviceid', '!=', $landingService ? $landingService->Serviceid : 0)
            ->orderBy('ServicesTitle')
            ->get();
            
        return view('pages/services-breast-pumps', compact('services', 'banners', 'landingService', 'allServices'));
    }

    public function service_hospital_beds()
    {
        $banners = \App\Models\Carousel::where('page', 'services')->latest()->get();
        $allServices = Service::where('status', 1)->where('pagecategory', 'services')->orderBy('ServicesTitle')->get();
        
        $landingService = Service::where('ServicesTitle', 'like', '%Hospital Bed%')->first();

        $services = Service::where('status', 1)
            ->where('pagesubcategory', 'Hospital Beds')
            ->where('Serviceid', '!=', $landingService ? $landingService->Serviceid : 0)
            ->orderBy('ServicesTitle')
            ->get();
            
        return view('pages/services-hospital-beds', compact('services', 'banners', 'landingService', 'allServices'));
    }
    public function collections(Request $request)
    {
        $per_page = (int)$request->get('per_page', 12);
        $sort_by = $request->get('sort_by', 'TITLE');
        $reverse = false;
        $sortKey = 'TITLE';

        if ($sort_by == 'price-low-high') { $sortKey = 'PRICE'; $reverse = false; }
        elseif ($sort_by == 'price-high-low') { $sortKey = 'PRICE'; $reverse = true; }
        elseif ($sort_by == 'newest') { $sortKey = 'CREATED_AT'; $reverse = true; }
        elseif ($sort_by == 'title-desc') { $sortKey = 'TITLE'; $reverse = true; }

        $filters = [];
        if ($request->filled('min_price') || $request->filled('max_price')) {
            $priceFilter = ['price' => []];
            if ($request->filled('min_price')) $priceFilter['price']['min'] = (float)$request->min_price;
            if ($request->filled('max_price')) $priceFilter['price']['max'] = (float)$request->max_price;
            $filters[] = $priceFilter;
        }
        if ($request->get('in_stock') == 'true') {
            $filters[] = ['available' => true];
        }

        $filters = [];
        if ($request->filled('min_price') || $request->filled('max_price')) {
            $priceFilter = ['price' => []];
            if ($request->filled('min_price')) $priceFilter['price']['min'] = (float)$request->min_price;
            if ($request->filled('max_price')) $priceFilter['price']['max'] = (float)$request->max_price;
            $filters[] = $priceFilter;
        }
        if ($request->get('in_stock') == 'true') {
            $filters[] = ['available' => true];
        }

        $data = $this->shopify->query('
            query($first: Int, $last: Int, $after: String, $before: String, $sortKey: ProductSortKeys, $reverse: Boolean) {
                products(first: $first, last: $last, after: $after, before: $before, sortKey: $sortKey, reverse: $reverse) {
                    pageInfo { hasNextPage hasPreviousPage startCursor endCursor }
                    edges {
                        cursor
                        node {
                            id title handle description
                            priceRange { minVariantPrice { amount currencyCode } }
                            compareAtPriceRange { minVariantPrice { amount } }
                            images(first: 1) { edges { node { url altText } } }
                            availableForSale
                        }
                    }
                }
                collections(first: 20) {
                    edges {
                        node { title handle image { url } }
                    }
                }
            }',
            [
                'first' => $request->cursor_before ? null : $per_page,
                'last' => $request->cursor_before ? $per_page : null,
                'after' => $request->cursor_after,
                'before' => $request->cursor_before,
                'sortKey' => $sortKey,
                'reverse' => $reverse
            ]
        );

        if (isset($data['errors'])) {
             Log::error('Shopify Errors', ['errors' => $data['errors']]);
             // If there are errors, return empty but safe
             $data['data'] = null; 
        }

        if (!isset($data['data'])) {
            $is_root = true;
            $category = (object)[
                'categoriename' => 'Shop by Category',
                'slug' => 'all-products',
                'meta_title' => 'Shop All Categories',
                'meta_description' => 'Explore our categories of home health care products.',
                'meta_keywords' => ''
            ];
            $products = collect();
            $categories = collect();
            $pageInfo = ['hasNextPage' => false, 'hasPreviousPage' => false, 'startCursor' => null, 'endCursor' => null];
            return view('pages/products', compact('category', 'products', 'categories', 'is_root', 'pageInfo'));
        }

        $is_root = true;
        $pageInfo = $data['data']['products']['pageInfo'];
        $category = (object)[
            'categoriename' => 'Shop by Category',
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
                'main_image' => $e['node']['images']['edges'][0]['node']['url'] ?? null,
                'is_available' => $e['node']['availableForSale'] ?? false
            ];
        });

        $categories = collect($data['data']['collections']['edges'])->map(fn($e) => (object)[
            'categoriename' => $e['node']['title'],
            'slug' => $e['node']['handle'],
            'image' => $e['node']['image']['url'] ?? asset('assets/images/resources/no-image.jpg')
        ]);

        return view('pages/products', compact('category', 'products', 'categories', 'is_root', 'pageInfo'));
    }
    public function products(Request $request, $slug)
    {
        $per_page = (int)$request->get('per_page', 12);
        $sort_by = $request->get('sort_by', 'TITLE');
        $reverse = false;
        $sortKey = 'TITLE';

        if ($sort_by == 'price-low-high') { $sortKey = 'PRICE'; $reverse = false; }
        elseif ($sort_by == 'price-high-low') { $sortKey = 'PRICE'; $reverse = true; }
        elseif ($sort_by == 'newest') { $sortKey = 'CREATED'; $reverse = true; }
        elseif ($sort_by == 'title-desc') { $sortKey = 'TITLE'; $reverse = true; }

        $filters = [];
        if ($request->filled('min_price') || $request->filled('max_price')) {
            $priceFilter = ['price' => []];
            if ($request->filled('min_price')) $priceFilter['price']['min'] = (float)$request->min_price;
            if ($request->filled('max_price')) $priceFilter['price']['max'] = (float)$request->max_price;
            $filters[] = $priceFilter;
        }
        if ($request->get('in_stock') == 'true') {
            $filters[] = ['available' => true];
        }

        $filters = [];
        if ($request->filled('min_price') || $request->filled('max_price')) {
            $priceFilter = ['price' => []];
            if ($request->filled('min_price')) $priceFilter['price']['min'] = (float)$request->min_price;
            if ($request->filled('max_price')) $priceFilter['price']['max'] = (float)$request->max_price;
            $filters[] = $priceFilter;
        }
        if ($request->get('in_stock') == 'true') {
            $filters[] = ['available' => true];
        }

        $data = $this->shopify->query('
            query($handle: String!, $first: Int, $last: Int, $after: String, $before: String, $sortKey: ProductCollectionSortKeys, $reverse: Boolean, $filters: [ProductFilter!]) {
                collectionByHandle(handle: $handle) {
                    title
                    description
                    seo { title description }
                    products(first: $first, last: $last, after: $after, before: $before, sortKey: $sortKey, reverse: $reverse, filters: $filters) {
                        pageInfo { hasNextPage hasPreviousPage startCursor endCursor }
                        edges {
                            cursor
                            node {
                                id title handle description
                                priceRange { minVariantPrice { amount currencyCode } }
                                compareAtPriceRange { minVariantPrice { amount } }
                                images(first: 1) { edges { node { url altText } } }
                                availableForSale
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
            [
                'handle' => $slug,
                'first' => $request->cursor_before ? null : $per_page,
                'last' => $request->cursor_before ? $per_page : null,
                'after' => $request->cursor_after,
                'before' => $request->cursor_before,
                'sortKey' => $sortKey,
                'reverse' => $reverse,
                'filters' => $filters ?: null
            ]
        );

        if (isset($data['errors'])) {
             Log::error('Shopify Errors Collection', ['errors' => $data['errors']]);
             $data['data'] = null; 
        }

        if (!isset($data['data']) || !isset($data['data']['collectionByHandle'])) {
            $category = (object)[
                'categoriename' => 'Products',
                'slug' => $slug,
                'meta_title' => 'Products',
                'meta_description' => '',
                'meta_keywords' => ''
            ];
            $products = collect();
            $categories = collect();
            $pageInfo = ['hasNextPage' => false, 'hasPreviousPage' => false, 'startCursor' => null, 'endCursor' => null];
            $is_root = false;
            return view('pages/products', compact('category', 'products', 'categories', 'is_root', 'pageInfo'));
        }

        $collectionData = $data['data']['collectionByHandle'];
        $pageInfo = $collectionData['products']['pageInfo'];

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
                'main_image' => $e['node']['images']['edges'][0]['node']['url'] ?? null,
                'is_available' => $e['node']['availableForSale'] ?? false
            ];
        });

        $categories = collect($data['data']['collections']['edges'])->map(fn($e) => (object)[
            'categoriename' => $e['node']['title'],
            'slug' => $e['node']['handle'],
            'image' => $e['node']['image']['url'] ?? asset('assets/images/resources/no-image.jpg')
        ]);

        $is_root = false;
        return view('pages/products', compact('category', 'products', 'categories', 'is_root', 'pageInfo'));
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

        if (!isset($data['data']) || !isset($data['data']['productByHandle'])) {
            abort(404);
        }

        $productData = $data['data']['productByHandle'];

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
            'shopify_variants' => collect($productData['variants']['edges'])->map(fn($e) => $e['node']),
            'is_available' => collect($productData['variants']['edges'])->contains(fn($v) => $v['node']['availableForSale'])
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
                                    availableForSale
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
                        'main_image' => $p['images']['edges'][0]['node']['url'] ?? null,
                        'is_available' => $p['availableForSale'] ?? false
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
        $services = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderBy('ServicesTitle')
            ->get();
        return view('pages/contact', compact('services'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:255'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        ContactUs::create([
            'Firstname' => $validated['first_name'],
            'Lastname' => $validated['last_name'] ?? null,
            'Phoneno' => $validated['phone'],
            'Emailaddress' => $validated['email'],
            'Location' => null,
            'Qualification' => $validated['subject'] ?? 'Contact Request',
            'Description' => $validated['service'] ?? null,
            'Message' => $validated['message'] ?? null,
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('Attempting to send contact form emails.');
            
            // Get admin email from .env, settings, or fallback
            $adminEmail = config('mail.admin_email', 'support@courticehomehealthcare.com');
            
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






    public function staticPage($slug)
    {
        $page = StaticPage::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.static_page', compact('page'));
    }

    public function not_found()
    {
        return view('pages/404');
        return redirect()->route('404');
    }
}
