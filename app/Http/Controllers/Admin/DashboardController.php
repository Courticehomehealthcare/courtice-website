<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Team;
use App\Models\ContactUs;
use App\Models\Carousel;   // ✅ ADD THIS

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services' => Services::count(),
            'blogs'    => Blog::count(),
            'faqs'     => Faq::count(),
             'contactus' => ContactUs::count(), // ✅ ADDED
            
            'carousel' => Carousel::count(),   // ✅ ADD THIS
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
