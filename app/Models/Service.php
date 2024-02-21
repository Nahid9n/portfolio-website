<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    private static $service,$icon,$iconName,$extension,$directory,$iconUrl;
    private static function getIcon($request){
        self::$icon = $request->file('icon');
        self::$extension = self::$icon->getClientOriginalExtension();
        self::$iconName = time().'.'.self::$extension;
        self::$directory = 'upload/service/';
        self::$icon->move(self::$directory,self::$iconName);
        self::$iconUrl = self::$directory.self::$iconName;
        return self::$iconUrl;
    }
    public static function newService($request){
        self::$service = new Service();
        self::$service->name = $request->name;
        self::$service->icon = $request->file('icon') ? self::getIcon($request):'';
        self::$service->short_description = $request->short_description;
        self::$service->long_description = $request->long_description;
        self::$service->status = $request->status;
        self::$service->save();
    }
    public static function updateService($request,$id){
        self::$service = Service::find($id);
        self::$service->name = $request->name;
        if ($request->file('icon')){
            if (file_exists(self::$service->icon)){
                unlink(self::$service->icon);
            }
            self::$service->icon = self::getIcon($request);
        }
        self::$service->short_description = $request->short_description;
        self::$service->long_description = $request->long_description;
        self::$service->status = $request->status;
        self::$service->save();
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$service = Service::find($id);
        self::$service->status = $request->status;
        self::$service->save();
    }
    public static function deleteService($id){
        self::$service = Service::find($id);
        if (file_exists(self::$service->icon)){
            unlink(self::$service->icon);
        }
        self::$service->delete();
    }


}
