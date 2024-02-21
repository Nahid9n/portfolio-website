<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    private static $team,$image,$imageName,$extension,$directory,$imageUrl;
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/team/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newTeam($request){
        self::$team = new Team();
        self::$team->name = $request->name;
        self::$team->image = $request->file('image') ? self::getImageUrl($request):'';
        self::$team->phone = $request->phone;
        self::$team->email = $request->email;
        self::$team->date_of_birth = $request->date_of_birth;
        self::$team->gender = $request->gender;
        self::$team->address = $request->address;
        self::$team->country = $request->country;
        self::$team->company = $request->company;
        self::$team->website = $request->website;
        self::$team->facebook = $request->facebook;
        self::$team->linkedIn = $request->linkedIn;
        self::$team->twitter = $request->twitter;
        self::$team->youtube = $request->youtube;
        self::$team->instagram = $request->instagram;
        self::$team->status = $request->status;
        self::$team->save();
    }
    public static function updateTeam($request,$id){
        self::$team = Team::find($id);
        if ($request->file('image')){
            if (file_exists(self::$team->image)){
                unlink(self::$team->image);
            }
            self::$team->image = self::getImageUrl($request);
        }
        self::$team->name = $request->name;
        self::$team->phone = $request->phone;
        self::$team->email = $request->email;
        self::$team->date_of_birth = $request->date_of_birth;
        self::$team->gender = $request->gender;
        self::$team->address = $request->address;
        self::$team->country = $request->country;
        self::$team->company = $request->company;
        self::$team->website = $request->website;
        self::$team->facebook = $request->facebook;
        self::$team->linkedIn = $request->linkedIn;
        self::$team->twitter = $request->twitter;
        self::$team->youtube = $request->youtube;
        self::$team->instagram = $request->instagram;
        self::$team->status = $request->status;
        self::$team->save();
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$team = Team::find($id);
        self::$team->status = $request->status;
        self::$team->save();
    }
    public static function deleteTeam($id){
        self::$team = Team::find($id);
        if (file_exists(self::$team->image)){
            unlink(self::$team->image);
        }
        self::$team->delete();
    }

}
