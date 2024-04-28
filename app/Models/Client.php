<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    private static $client,$logo,$logoName,$extension,$directory,$logoUrl;
    public static function getLogo($request){
        self::$logo = $request->file('logo');
        self::$extension = self::$logo->getClientOriginalExtension();
        self::$logoName = time().'.'.self::$extension;
        self::$directory = 'upload/clients/';
        self::$logo->move(self::$directory,self::$logoName);
        self::$logoUrl = self::$directory.self::$logoName;
        return self::$logoUrl;
    }
    public static function newClient($request){
        self::$client = new Client();
        self::$client->name = $request->name;
        self::$client->company_url = $request->company_url;
        self::$client->logo = $request->file('logo') ? self::getLogo($request):'';
        self::$client->status = $request->status;
        self::$client->save();
    }
    public static function updateClient($request,$id){
        self::$client = Client::find($id);
        self::$client->name = $request->name;
        self::$client->company_url = $request->company_url;
        if ($request->file('logo')){
            if (file_exists(self::$client->logo)){
                unlink(self::$client->logo);
            }
            self::$client->logo = self::getLogo($request);
        }
        self::$client->status = $request->status;
        self::$client->save();
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$client = Client::find($id);
        self::$client->status = $request->status;
        self::$client->save();
    }
    public static function deleteClient($id){
        self::$client = Client::find($id);
        if (file_exists(self::$client->logo)){
            unlink(self::$client->logo);
        }
        self::$client->delete();
    }
    public function project(){
        return $this->hasOne(Project::class);
    }
}
