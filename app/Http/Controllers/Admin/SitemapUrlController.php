<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SitemapUrl;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Product;
use App\Models\Category;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class SitemapUrlController extends Controller
{
    public function index()
    {
        $urls = SitemapUrl::orderBy('priority', 'desc')->paginate(15);
        return view('admin.sitemap_urls.index', compact('urls'));
    }

    public function create()
    {
        return view('admin.sitemap_urls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|unique:sitemap_urls,url',
            'priority' => 'required|numeric|min:0|max:1',
            'changefreq' => 'required'
        ]);

        SitemapUrl::create($request->all() + ['source' => 'manual']);

        return redirect()->route('admin.sitemap-urls.index')->with('success', 'URL added to sitemap.');
    }

    public function edit(SitemapUrl $sitemapUrl)
    {
        return view('admin.sitemap_urls.edit', compact('sitemapUrl'));
    }

    public function update(Request $request, SitemapUrl $sitemapUrl)
    {
        $request->validate([
            'url' => 'required|unique:sitemap_urls,url,' . $sitemapUrl->id,
            'priority' => 'required|numeric|min:0|max:1',
            'changefreq' => 'required'
        ]);

        $sitemapUrl->update($request->all());

        return redirect()->route('admin.sitemap-urls.index')->with('success', 'URL updated.');
    }

    public function destroy(SitemapUrl $sitemapUrl)
    {
        $sitemapUrl->delete();
        return redirect()->route('admin.sitemap-urls.index')->with('success', 'URL removed from sitemap.');
    }

    public function sync()
    {
        // 1. Static Core Pages
        $statics = [
            '/' => ['priority' => 1.0, 'freq' => 'daily'],
            '/about' => ['priority' => 0.8, 'freq' => 'monthly'],
            '/services' => ['priority' => 0.9, 'freq' => 'weekly'],
            '/products' => ['priority' => 0.9, 'freq' => 'daily'],
            '/blog' => ['priority' => 0.8, 'freq' => 'weekly'],
            '/contact' => ['priority' => 0.7, 'freq' => 'monthly'],
        ];

        foreach ($statics as $url => $data) {
            SitemapUrl::updateOrCreate(['url' => $url], [
                'priority' => $data['priority'],
                'changefreq' => $data['freq'],
                'source' => 'static',
                'lastmod' => now()
            ]);
        }

        // 2. Services
        foreach (Service::all() as $item) {
            if ($item->servicesUrl) {
                SitemapUrl::updateOrCreate(['url' => '/services/' . $item->servicesUrl], [
                    'priority' => 0.8,
                    'changefreq' => 'weekly',
                    'source' => 'service',
                    'lastmod' => $item->updated_at
                ]);
            }
        }

        // 3. Blogs
        foreach (Blog::where('visible', 1)->get() as $item) {
            if ($item->blogurl) {
                SitemapUrl::updateOrCreate(['url' => '/blog/' . $item->blogurl], [
                    'priority' => 0.7,
                    'changefreq' => 'weekly',
                    'source' => 'blog',
                    'lastmod' => $item->updated_at
                ]);
            }
        }

        // 4. Categories
        foreach (Category::where('status', 1)->get() as $item) {
            if ($item->slug) {
                SitemapUrl::updateOrCreate(['url' => '/products/' . $item->slug], [
                    'priority' => 0.8,
                    'changefreq' => 'monthly',
                    'source' => 'category',
                    'lastmod' => $item->updated_at
                ]);
            }
        }

        // 5. Products
        foreach (Product::where('status', 1)->get() as $item) {
            if ($item->slug) {
                SitemapUrl::updateOrCreate(['url' => '/product-details/' . $item->slug], [
                    'priority' => 0.8,
                    'changefreq' => 'weekly',
                    'source' => 'product',
                    'lastmod' => $item->updated_at
                ]);
            }
        }

        // 6. Static Pages
        foreach (StaticPage::where('is_active', true)->get() as $item) {
            SitemapUrl::updateOrCreate(['url' => '/' . $item->slug], [
                'priority' => 0.5,
                'changefreq' => 'yearly',
                'source' => 'static_page',
                'lastmod' => $item->updated_at
            ]);
        }

        return redirect()->route('admin.sitemap-urls.index')->with('success', 'Sitemap URLs synced from database.');
    }
}
