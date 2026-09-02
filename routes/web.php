<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\Admin\SubscriberController;

Route::get('/', [HomeController::class, 'index4'])->name('index4');

// ===== PUBLIC PAGES =====
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('doctor', [PagesController::class, 'doctor'])->name('doctor');
Route::get('doctor-carousel', [PagesController::class, 'doctor_carousel'])->name('doctor-carousel');
Route::get('doctor-details', [PagesController::class, 'doctor_details'])->name('doctor-details');
Route::get('project', [PagesController::class, 'project'])->name('project');
Route::get('project-carousel', [PagesController::class, 'project_carousel'])->name('project-carousel');
Route::get('project-details', [PagesController::class, 'project_details'])->name('project-details');
Route::get('testimonials', [PagesController::class, 'testimonials'])->name('testimonials');
Route::get('testimonial-carousel', [PagesController::class, 'testimonial_carousel'])->name('testimonial-carousel');
Route::get('pricing', [PagesController::class, 'pricing'])->name('pricing');
Route::get('appoinment', [PagesController::class, 'appoinment'])->name('appoinment');
Route::get('faq', [PagesController::class, 'faq'])->name('faq');
Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('services/{slug}', [PagesController::class, 'service_details'])->where('slug', '.*')->name('services.details');
Route::get('service-carousel', [PagesController::class, 'service_carousel'])->name('service-carousel');

Route::redirect('vitality-health-solutions', '/services/vitality-health-solutions', 301);
Route::redirect('wellSpring-wellness-center', '/services/wellSpring-wellness-center', 301);
Route::redirect('harmony-family-health-medical', '/services/harmony-family-health-medical', 301);
Route::redirect('evergreen-medical-center', '/services/evergreen-medical-center', 301);
Route::redirect('pure-life-health-services', '/services/pure-life-health-services', 301);

Route::get('coming-soon', [PagesController::class, 'coming_soon'])->name('coming-soon');

// ===== PRODUCTS =====
Route::get('/products', [PagesController::class, 'collections'])->name('collections');
Route::get('/products/{slug}', [PagesController::class, 'products'])->name('products');
Route::get('/product-details/{slug}', [PagesController::class, 'product_details'])->name('product-details');

// ===== CART =====
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/cart/buy-now', [App\Http\Controllers\CartController::class, 'buyNow'])->name('cart.buy-now');
Route::post('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('/checkout', fn() => redirect()->route('cart'));

Route::get('wishlist', [PagesController::class, 'wishlist'])->name('wishlist');

// ===== PUBLIC USER AUTH (ECOMMERCE) 🛒 =====
Route::get('sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::post('sign-up', [AuthController::class, 'register'])->name('sign-up.post');

Route::get('login', [PagesController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// ===== ADMIN/CARE AUTH (STAFF) 🔐 =====
Route::get('care/login', [AuthController::class, 'showCareLogin'])->name('care.login');
Route::post('care/login', [AuthController::class, 'careLogin'])->name('care.login.submit');

// ===== BLOG =====
Route::get('blog', [PagesController::class, 'blog'])->name('blog');
Route::get('blog-carousel', [PagesController::class, 'blog_carousel'])->name('blog-carousel');
Route::get('blog-list', [PagesController::class, 'blog_list'])->name('blog-list');
Route::get('blog-list-2', [PagesController::class, 'blog_list_2'])->name('blog-list-2');
Route::get('blog/{slug}', [PagesController::class, 'blog_details'])->name('blog.details');

// ===== CONTACT & CAREERS =====
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::post('contact-submit', [PagesController::class, 'submitContact'])->name('contact.submit');

Route::get('careers', [CareersController::class, 'index'])->name('careers.index');
Route::get('careers/{id}', [CareersController::class, 'show'])->name('careers.show');
Route::post('careers/{id}/apply', [CareersController::class, 'apply'])->name('careers.apply');

// ===== UTILITIES =====
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');

Route::get('/link-storage', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return "Storage link created successfully!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

Route::get('/test-contact-email', function () {
    $data = [
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'test@courticehomehealthcare.com',
        'phone' => '9057210004',
        'subject' => 'Test Contact',
        'message' => 'This is a test message.',
    ];
    try {
        $mail = \Illuminate\Support\Facades\Mail::to('support@courticehomehealthcare.com');
        if (env('MAIL_CC_ADDRESS')) {
            $mail->cc(env('MAIL_CC_ADDRESS'));
        }
        $mail->send(new \App\Mail\ContactFormSubmitted($data));
        \Illuminate\Support\Facades\Mail::to($data['email'])
            ->send(new \App\Mail\ContactThankYou($data));
        return "Test emails sent successfully!";
    } catch (\Exception $e) {
        return "Failed to send test emails: " . $e->getMessage();
    }
});

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

// ===== STATIC PAGES (CATCH-ALL) =====

// Email Verification Route
Route::get('/verify-email/{id}/{hash}', [AuthController::class, 'verifyEmail'])->name('verify.email');
Route::get('/{slug}', [PagesController::class, 'staticPage'])->name('static.page');

// ===== 404 FALLBACK =====
Route::fallback([PagesController::class, 'not_found']);

// Email Verification Route
