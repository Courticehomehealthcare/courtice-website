<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareersController;

Route::get('/', [HomeController::class, 'index4'])->name('index4');

// Pages 
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
Route::get('/products', [PagesController::class, 'collections'])->name('collections');
Route::get('/products/{slug}', [PagesController::class, 'products'])->name('products');
Route::get('/product-details/{slug}', [PagesController::class, 'product_details'])->name('product-details');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('/checkout', function () {
    return redirect()->route('cart'); });
Route::get('wishlist', [PagesController::class, 'wishlist'])->name('wishlist');
Route::get('sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::get('login', [PagesController::class, 'login'])->name('login');


use App\Http\Controllers\Admin\SubscriberController;

Route::post('login', [AuthController::class, 'login'])
    ->name('login.submit');

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');


Route::get('blog', [PagesController::class, 'blog'])->name('blog');
Route::get('blog-carousel', [PagesController::class, 'blog_carousel'])->name('blog-carousel');
Route::get('blog-list', [PagesController::class, 'blog_list'])->name('blog-list');
Route::get('blog-list-2', [PagesController::class, 'blog_list_2'])->name('blog-list-2');
Route::get('blog/{slug}', [PagesController::class, 'blog_details'])->name('blog.details');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::post('contact-submit', [PagesController::class, 'submitContact'])->name('contact.submit');

Route::get('careers', [CareersController::class, 'index'])->name('careers.index');
Route::get('careers/{id}', [CareersController::class, 'show'])->name('careers.show');
Route::post('careers/{id}/apply', [CareersController::class, 'apply'])->name('careers.apply');





// Temporary route to link storage (run this once in browser: yourdomain.com/link-storage)
Route::get('/link-storage', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return "Storage link created successfully!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

// Temporary test route for email delivery verification (Remove after testing)
Route::get('/test-contact-email', function () {
    $data = [
        'first_name' => 'saikrishna',
        'last_name' => 'Test',
        'email' => 'nallapaneni.saikrishna@gmail.com',
        'phone' => '1234567890',
        'subject' => 'Test Contact Submission',
        'message' => 'This is a test message to verify the dual-email system and SMTP configuration.',
    ];

    try {
        // Internal notification
        $mail = \Illuminate\Support\Facades\Mail::to('support@courticehomehealthcare.com');
        if (env('MAIL_CC_ADDRESS')) {
            $mail->cc(env('MAIL_CC_ADDRESS'));
        }
        $mail->send(new \App\Mail\ContactFormSubmitted($data));

        // Thank you email to user
        \Illuminate\Support\Facades\Mail::to($data['email'])
            ->send(new \App\Mail\ContactThankYou($data));

        return "Test emails sent successfully to support and {$data['email']}!";
    } catch (\Exception $e) {
        return "Failed to send test emails: " . $e->getMessage();
    }
});


Route::get('/shop', function () {
    return redirect()->route('collections'); });
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
Route::get('/{slug}', [PagesController::class, 'staticPage'])->name('static.page');
Route::fallback([PagesController::class, 'not_found']);
