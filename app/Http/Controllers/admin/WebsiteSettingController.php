<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use Exception;

class WebsiteSettingController extends Controller
{
    public function index(){

        return view('admin.setting.website-setup.index',[
            'websiteSetup'=>WebsiteSetting::first(),
        ]);
    }
    public function update(Request $request,$id){
        try {
            $this->validate($request,[
                'website_name'=>'required',
                'banner'=>'mimes:jpg,jpeg,png,webp,tiff',
                'logo'=>'mimes:jpg,jpeg,png,webp,tiff',
                'icon'=>'mimes:jpg,jpeg,png,webp,tiff',
            ],[
                'website_name.required'=>'Company Name is required',
                'banner.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
                'logo.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
                'icon.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
            ]);
            WebsiteSetting::updateWebsiteSetting($request,$id);
            return back()->with('message','Update Success.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }

    }
    public function about(){
        return view('admin.setting.about.index',[
            'about'=>About::first(),
        ]);
    }
    public function aboutUpdate(Request $request,$id){
        try {
            $this->validate($request,[
                'title'=>'required',
                'image1'=>'mimes:jpg,jpeg,png,webp,tiff',
                'image2'=>'mimes:jpg,jpeg,png,webp,tiff',
                'image3'=>'mimes:jpg,jpeg,png,webp,tiff',
            ],[
                'title.required'=>'Name is required',
                'image1.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
                'image2.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
                'image3.mimes'=>'File Type Must be jpg,jpeg,png,webp,tiff',
            ]);
            About::updateWebsiteAbout($request,$id);
            return back()->with('message','Update Success.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }
    public function contact(){
        return view('admin.setting.contact.index',[
            'contact'=>Contact::first(),
        ]);
    }
    public function contactUpdate(Request $request,$id){
        try {
            Contact::updateWebsiteContact($request,$id);
            return back()->with('message','Update Success.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }



}
