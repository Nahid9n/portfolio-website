<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectOtherImage extends Model
{
    use HasFactory;
    private static $projectImage,$projectImages,$image,$imageName,$extension,$directory;
    private static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = rand(0, 500000).'.'.self::$extension;
        self::$directory = 'upload/product-other-images/';
        $image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newImage($images,$id){
        foreach ($images as $image){
            self::$projectImage = new ProjectOtherImage();
            self::$projectImage->project_id = $id;
            self::$projectImage->user_id = auth()->user()->id;
            self::$projectImage->image = self::getImageUrl($image);
            self::$projectImage->save();
        }
    }
    public static function updateProjectImage($images, $id)
    {
        self::$projectImages = ProjectOtherImage::where('project_id', $id)->get();
        foreach (self::$projectImages as $projectImage)
        {
            if (file_exists($projectImage->image))
            {
                unlink($projectImage->image);
            }
            $projectImage->delete();
        }
        self::newImage($images, $id);
    }
    public static function deleteProjectImage($id)
    {
        self::$projectImages = ProjectOtherImage::where('project_id', $id)->get();
        foreach (self::$projectImages as $projectImage)
        {
            if (file_exists($projectImage->image))
            {
                unlink($projectImage->image);
            }
            $projectImage->delete();
        }
    }

}
