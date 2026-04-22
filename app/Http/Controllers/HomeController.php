<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Carousel;
use App\Models\ClientImage;
use App\Models\SlidingText;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function index4()
    {
        $carousels = Carousel::where('page', 'home')->orWhereNull('page')->orderByDesc('id')->get();
        $clientImages = ClientImage::orderByDesc('clientid')->get();

        $featuredServices = Service::where('status', 1)
            ->where('pagecategory', 'services')
            ->orderByDesc('created_at')
            ->take(9)
            ->get();

        $featuredProducts = Service::where('status', 1)
            ->where('pagecategory', 'products')
            ->orderByDesc('created_at')
            ->take(6)
            ->get();

        $homeFaqs = Faq::where('page', 'home')
            ->orWhereNull('page')
            ->orderByDesc('created_at')
            ->take(4)
            ->get();

        $blogs = Blog::where('visible', 1)
            ->orderByDesc('last_updated')
            ->take(3)
            ->get();

        $slidingTexts = SlidingText::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('index4', compact('featuredServices', 'featuredProducts', 'homeFaqs', 'blogs', 'carousels', 'slidingTexts', 'clientImages'));
    }
    public function index5()
    {
        return view('index5');
    }
    public function index_dark()
    {
        return view('index-dark');
    }
    public function index_one_page()
    {
        return view('index-one-page');
    }
    public function index2_one_page()
    {
        return view('index2-one-page');
    }
    public function index3_one_page()
    {
        return view('index3-one-page');
    }
    public function index4_one_page()
    {
        return view('index4-one-page');
    }
    public function index5_one_page()
    {
        return view('index5-one-page');
    }
}
