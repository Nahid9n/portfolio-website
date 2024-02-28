<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about,$image1,$image1Name,$extension,$directory,$image1Url,$image2,$image2Name,$image2Url,$image3,$image3Name,$image3Url;
    public static function getImage1($request){
        self::$image1 = $request->file('image1');
        self::$extension = self::$image1->getClientOriginalExtension();
        self::$image1Name = time().'.'.self::$extension;
        self::$directory = 'upload/setting/about/';
        self::$image1->move(self::$directory,self::$image1Name);
        self::$image1Url = self::$directory.self::$image1Name;
        return self::$image1Url;
    }
    public static function getImage2($request){
        self::$image2 = $request->file('image2');
        self::$extension = self::$image2->getClientOriginalExtension();
        self::$image2Name = time().'.'.self::$extension;
        self::$directory = 'upload/setting/about/';
        self::$image2->move(self::$directory,self::$image2Name);
        self::$image2Url = self::$directory.self::$image2Name;
        return self::$image2Url;
    }
    public static function getImage3($request){
        self::$image3 = $request->file('image3');
        self::$extension = self::$image3->getClientOriginalExtension();
        self::$image3Name = time().'.'.self::$extension;
        self::$directory = 'upload/setting/about/';
        self::$image3->move(self::$directory,self::$image3Name);
        self::$image3Url = self::$directory.self::$image3Name;
        return self::$image3Url;
    }
    public static function updateWebsiteAbout($request,$id){
        self::$about = About::find($id);
        self::$about->title = $request->title;
        self::$about->description = $request->description;
        if ($request->file('image1')){
            if (file_exists(self::$about->image1)){
                unlink(self::$about->image1);
            }
            self::$about->image1 = self::getImage1($request);
        }
        if ($request->file('image2')){
            if (file_exists(self::$about->image2)){
                unlink(self::$about->image2);
            }
            self::$about->image2 = self::getImage2($request);
        }
        if ($request->file('image3')){
            if (file_exists(self::$about->image3)){
                unlink(self::$about->image3);
            }
            self::$about->image3 = self::getImage3($request);
        }
        self::$about->status = $request->status;
        self::$about->save();
    }
}
