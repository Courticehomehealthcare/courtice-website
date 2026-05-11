<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Product;
use App\Models\Category;
use App\Models\StaticPage;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('visible', 1)->get();
        $services = Service::all();
        $products = Product::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $staticPages = StaticPage::where('is_active', true)->get();

        $content = view('sitemap', compact('blogs', 'services', 'products', 'categories', 'staticPages'))->render();

        return Response::make($content, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
