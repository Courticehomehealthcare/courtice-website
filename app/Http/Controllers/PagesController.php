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

class PagesController extends Controller
{
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
        $categories = Category::where('status', 1)->get();
        return view('pages/collections', compact('categories'));
    }
    public function products($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->where('status', 1)->paginate(12);
        $categories = Category::where('status', 1)->get();
        return view('pages/products', compact('category', 'products', 'categories'));
    }
    public function product_details($slug)
    {
        $product = Product::with(['category', 'images'])->where('slug', $slug)->where('status', 1)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->take(4)
            ->get();
            
        return view('pages/product-details', compact('product', 'relatedProducts'));
    }
    public function cart()
    {
        return view('pages/cart');
    }
    public function checkout()
    {
        return view('pages/checkout');
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
