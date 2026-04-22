<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function digitalMarketing()
    {
        return view('services/digitalMarketing');
    }
    
    public function graphicDesigning()
    {
        return view('services/graphicDesigning');
    }
    
    public function mobileApplications()
    {
        return view('services/mobileApplications');
    }
    
    public function seoContentWriting()
    {
        return view('services/seoContentWriting');
    }
    
    public function services()
    {
        return view('services/services');
    }
    
    public function socialMarketing()
    {
        return view('services/socialMarketing');
    }
    
    public function webDevelopment()
    {
        return view('services/webDevelopment');
    }
    
}
