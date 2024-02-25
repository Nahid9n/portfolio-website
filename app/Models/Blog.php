<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageName,$extension,$directory,$imageUrl;
    public static function getImage($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/blogs/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newBlog($request){
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        self::$blog->image = $request->file('image') ? self::getImage($request):'';
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->meta_title = $request->meta_title;
        self::$blog->meta_description = $request->meta_description;
        self::$blog->meta_tags = $request->meta_tags;
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function updateBlog($request,$id){
        self::$blog = Blog::find($id);
        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        if ($request->file('image')){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$blog->image = self::getImage($request);
        }
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->meta_title = $request->meta_title;
        self::$blog->meta_description = $request->meta_description;
        self::$blog->meta_tags = $request->meta_tags;
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$blog = Blog::find($id);
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function deleteBlog($id){
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }

}
