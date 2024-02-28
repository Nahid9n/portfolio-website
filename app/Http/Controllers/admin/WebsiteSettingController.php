<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    public function index(){
        return view('admin.setting.website-setup.index',[
            'websiteSetup'=>WebsiteSetting::first(),
        ]);
    }
    public function update(Request $request,$id){
        WebsiteSetting::updateWebsiteSetting($request,$id);
        return back()->with('message','Update Success.');
    }

}
