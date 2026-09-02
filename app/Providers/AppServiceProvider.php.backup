<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Service;
use App\Models\DynamicContent;
use App\Models\SeoPage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // ── Footer composer (existing) ──────────────────────────────────────────
        View::composer(['components.footerThree', 'components.footer-three'], function ($view) {
            $footerServices = Service::where('status', 1)
                ->where('pagecategory', 'services')
                ->orderByDesc('created_at')
                ->take(5)
                ->get();

            $siteSettings = DynamicContent::first();

            $view->with('footerServices', $footerServices)
                ->with('siteSettings', $siteSettings);
        });

        // ── SEO & Global Settings composer — shares $seo and $siteSettings with every public view ──
        View::composer('*', function ($view) {
            // Skip admin views — they use AdminLTE layout and don't need $seo
            $currentView = $view->getName();
            if (str_starts_with($currentView, 'admin') || str_starts_with($currentView, 'adminlte')) {
                return;
            }

            try {
                $routeName = optional(request()->route())->getName() ?? '';
                $pageKey = SeoPage::keyFromRoute($routeName);
                $seo = SeoPage::forPage($pageKey);
                $siteSettings = DynamicContent::first();
                $view->with('seo', $seo)->with('siteSettings', $siteSettings);
            } catch (\Exception $e) {
                // DB not ready (e.g., during migrations) — pass empty models
                $view->with('seo', new SeoPage())->with('siteSettings', new DynamicContent());
            }
        });
    }
}
