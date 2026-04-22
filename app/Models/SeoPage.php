<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $fillable = [
        'page_key',
        'page_label',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'canonical_url',
    ];

    /**
     * Map Laravel route names → page_key values stored in DB.
     * Add new entries here whenever a new page/route is added.
     */
    public static array $routeMap = [
        // Home
        'home' => 'home',
        // Static pages
        'about' => 'about',
        'contact' => 'contact',
        'faq' => 'faq',
        'appoinment' => 'appoinment',
        'pricing' => 'pricing',
        // Services
        'services' => 'services',
        'services.details' => 'service-details',
        // Products
        'products' => 'products',
        // Blog
        'blog' => 'blog',
        'blog.details' => 'blog-details',
        // Team / Doctor
        'doctor' => 'doctor',
        // Gallery / Project
        'project' => 'project',
        // Testimonials
        'testimonials' => 'testimonials',
    ];

    /**
     * Resolve a page_key from the current route name.
     */
    public static function keyFromRoute(?string $routeName): string
    {
        return static::$routeMap[$routeName] ?? 'default';
    }

    /**
     * Fetch the SEO record for a given page_key, or return an empty model.
     */
    public static function forPage(string $pageKey): self
    {
        return static::where('page_key', $pageKey)->first() ?? new static();
    }
}
