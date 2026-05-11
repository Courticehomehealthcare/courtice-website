<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ClientImageController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\DynamicContentController;
use App\Http\Controllers\Admin\SlidingTextController;
use App\Http\Controllers\Admin\SeoPageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\SitemapUrlController;
use App\Http\Middleware\AdminRole;

Route::middleware(['web', 'auth:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/patients', [PatientController::class, 'index'])
            ->name('patients');
        Route::resource('services', ServiceController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('static-pages', StaticPageController::class);
        Route::get('products/image/{id}/delete', [ProductController::class, 'deleteImage'])->name('products.image.delete');
        Route::resource('carousel', CarouselController::class);
        Route::resource('faqs', FaqController::class)->parameters(['faqs' => 'faq']);
        Route::resource('sliding-texts', SlidingTextController::class)->parameters(['sliding-texts' => 'slidingText']);
        Route::resource('team', TeamController::class);
        Route::post('contacts/bulk-destroy', [ContactUsController::class, 'bulkDestroy'])->name('contacts.bulk-destroy');
        Route::resource('contacts', ContactUsController::class)->only(['index', 'show', 'destroy']);
        Route::get('/settings', [DynamicContentController::class, 'index'])->name('settings.index');                   // List all
    
        Route::get('/settings/{id}/edit', [DynamicContentController::class, 'edit'])->name('settings.edit');                   // Open edit page
    
        Route::post('/settings/{id}', [DynamicContentController::class, 'update'])->name('settings.update');
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::post('/gallery/upload', [GalleryController::class, 'upload'])->name('gallery.upload');
        Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');



        Route::get('/client-images', [ClientImageController::class, 'index'])
            ->name('client.images');

        Route::post('/client-images/upload', [ClientImageController::class, 'store'])
            ->name('client.images.upload');

        Route::delete('/client-images/{id}', [ClientImageController::class, 'destroy'])
            ->name('client.images.delete');

        Route::get(
            '/service-video/{id}/delete',
            [ServiceController::class, 'deleteVideo']
        )
            ->name('service.video.delete');

        Route::get(
            '/service-gallery/{id}/delete',
            [ServiceController::class, 'deleteGallery']
        )
            ->name('service.gallery.delete');

        Route::get('/subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
        Route::post('/subscribers/send', [SubscriberController::class, 'sendNewsletter'])->name('subscribers.send');
        Route::post('/subscribers/clear', [SubscriberController::class, 'clearAll'])->name('subscribers.clearAll');

        // SEO Pages
        Route::get('/seo-pages', [SeoPageController::class, 'index'])->name('seo.index');
        Route::get('/seo-pages/{id}/edit', [SeoPageController::class, 'edit'])->name('seo.edit');
        Route::post('/seo-pages/{id}', [SeoPageController::class, 'update'])->name('seo.update');

        // Careers
        Route::resource('job-postings', \App\Http\Controllers\Admin\JobPostingController::class);
        Route::get('job-applications', [\App\Http\Controllers\Admin\JobApplicationController::class, 'index'])->name('job-applications.index');
        Route::get('job-applications/{id}', [\App\Http\Controllers\Admin\JobApplicationController::class, 'show'])->name('job-applications.show');
        Route::post('job-applications/{id}/thank-you', [\App\Http\Controllers\Admin\JobApplicationController::class, 'sendThankYou'])->name('job-applications.thank-you');
        Route::delete('job-applications/{id}', [\App\Http\Controllers\Admin\JobApplicationController::class, 'destroy'])->name('job-applications.destroy');

        // Sitemap Management
        Route::get('sitemap-urls/sync', [SitemapUrlController::class, 'sync'])->name('sitemap-urls.sync');
        Route::resource('sitemap-urls', SitemapUrlController::class);

    });

