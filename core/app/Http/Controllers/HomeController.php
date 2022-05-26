<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = '';
        $cities = City::all();
        $categories = Categories::all();
        $blogs = Blog::paginate(3);
        return view('frontend.index' ,compact('cities', 'categories', 'page', 'blogs'));
    }

    public function our_services()
    {
        $banner['heading'] = "Our Services";
        $banner['sub-heading'] = "In <span class='text-red'>Response</span>, We mean  <span class='text-red'>Business</span>";
        return view('frontend.pages.our_services', compact('banner'));
    }

    public function career()
    {
        $banner['heading'] = "career";
        $banner['sub-heading'] = "Be part of our team";
        return view('frontend.pages.career', compact('banner'));
    }



    public function about_us()
    {
        return view('frontend.pages.about_us');
    }

    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    }
}
