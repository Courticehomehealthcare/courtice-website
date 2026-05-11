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
        $urls = SitemapUrl::where('is_active', true)->orderBy('priority', 'desc')->get();

        $content = view('sitemap', compact('urls'))->render();

        return Response::make($content, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
