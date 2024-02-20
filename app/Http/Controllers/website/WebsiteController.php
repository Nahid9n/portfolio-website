<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function service(){
        return view('website.service.index');
    }
    public function portfolio(){
        return view('website.portfolio.index');
    }
    public function blog(){
        return view('website.blog.index');
    }
    public function blogDetails(){
        return view('website.blog.details');
    }
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index');
    }

}
