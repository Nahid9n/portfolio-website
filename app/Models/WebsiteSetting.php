<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;
    private static $website,$logo,$logoName,$extension,$directory,$logoUrl,$banner,$bannerName,$bannerUrl,$icon,$iconName,$iconUrl;
    public static function getLogo($request){
        self::$logo = $request->file('logo');
        self::$extension = self::$logo->getClientOriginalExtension();
        self::$logoName = time().'.'.self::$extension;
        self::$directory = 'upload/setting/website-setup/logo/';
        self::$logo->move(self::$directory,self::$logoName);
        self::$logoUrl = self::$directory.self::$logoName;
        return self::$logoUrl;
    }
    public static function getBanner($request){
        self::$banner = $request->file('banner');
        self::$extension = self::$banner->getClientOriginalExtension();
        self::$bannerName = time().'.'.self::$extension;
        self::$directory = 'upload/setting/website-setup/banner/';
        self::$banner->move(self::$directory,self::$bannerName);
        self::$bannerUrl = self::$directory.self::$bannerName;
        return self::$bannerUrl;
    }
    public static function getIcon($request){
        self::$icon = $request->file('icon');
        self::$extension = self::$icon->getClientOriginalExtension();
        self::$iconName = time().'.'.self::$extension;
        self::$directory = 'upload/setting/website-setup/icon/';
        self::$icon->move(self::$directory,self::$iconName);
        self::$iconUrl = self::$directory.self::$iconName;
        return self::$iconUrl;
    }
    public static function updateWebsiteSetting($request,$id){
        self::$website = WebsiteSetting::find($id);
        self::$website->website_name = $request->website_name;
        if ($request->file('logo')){
            if (file_exists(self::$website->logo)){
                unlink(self::$website->logo);
            }
            self::$website->logo = self::getLogo($request);
        }
        if ($request->file('banner')){
            if (file_exists(self::$website->banner)){
                unlink(self::$website->banner);
            }
            self::$website->banner = self::getBanner($request);
        }
        if ($request->file('icon')){
            if (file_exists(self::$website->icon)){
                unlink(self::$website->icon);
            }
            self::$website->icon = self::getIcon($request);
        }
        self::$website->status = $request->status;
        self::$website->save();
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$website = WebsiteSetting::find($id);
        self::$website->status = $request->status;
        self::$website->save();
    }

}
