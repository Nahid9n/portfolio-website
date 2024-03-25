<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;
    public static function updateWebsiteContact($request,$id){
        self::$contact = Contact::find($id);
        self::$contact->address = $request->address;
        self::$contact->hotline = $request->hotline;
        self::$contact->hotline2 = $request->hotline2;
        self::$contact->hotline3 = $request->hotline3;
        self::$contact->email = $request->email;
        self::$contact->facebook = $request->facebook;
        self::$contact->twitter = $request->twitter;
        self::$contact->linkedIn = $request->linkedIn;
        self::$contact->website = $request->website;
        self::$contact->skypee = $request->skypee;
        self::$contact->youtube = $request->youtube;
        self::$contact->instagram = $request->instagram;
        self::$contact->whatsapp = $request->whatsapp;
        self::$contact->map = $request->map;
        self::$contact->description = $request->description;
        self::$contact->save();
    }
}
