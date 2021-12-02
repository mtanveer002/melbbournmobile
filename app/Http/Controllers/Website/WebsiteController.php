<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('website.page.home');
    }

    public function aboutus()
    {
        return view('website.page.aboutus');
    }
}
