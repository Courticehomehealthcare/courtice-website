<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog/blog');
    }
    
    public function blogDetails()
    {
        return view('blog/blogDetails');
    }
    
    public function blogSidebar()
    {
        return view('blog/blogSidebar');
    }
    
}
