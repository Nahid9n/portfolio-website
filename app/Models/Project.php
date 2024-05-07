<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\If_;

class Project extends Model
{
    use HasFactory;
    private static $project,$image,$video,$imageName,$videoName,$extension,$directory,$imageUrl,$videoUrl;
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/project/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function getVideoUrl($request){
        self::$video = $request->file('video');
        self::$extension = self::$video->getClientOriginalExtension();
        self::$videoName = time().'.'.self::$extension;
        self::$directory = 'upload/project/video/';
        self::$video->move(self::$directory,self::$videoName);
        self::$videoUrl = self::$directory.self::$videoName;
        return self::$videoUrl;
    }

    public static function newProject($request){
        self::$project = new Project();
        self::$project->user_id = auth()->user()->id;
        self::$project->title = $request->title;
        self::$project->slug = Str::slug($request->title);
        self::$project->image = $request->file('image') ? self::getImageUrl($request):'';
        self::$project->video = $request->file('video') ? self::getVideoUrl($request):'';
        self::$project->short_details = $request->short_details;
        self::$project->long_details = $request->long_details;
        self::$project->category_id = $request->category_id;
        self::$project->code = $request->code;
        self::$project->team_id = json_encode($request->team_id);
        self::$project->client_id = $request->client_id;
        self::$project->commit = $request->commit;
        self::$project->start_date = $request->start_date;
        self::$project->end_date = $request->end_date;
        self::$project->vendor = $request->vendor;
        self::$project->progress = $request->progress;
        self::$project->panel = $request->panel;
        self::$project->live_status = $request->live_status;
        self::$project->status = $request->status;
        self::$project->save();
        return self::$project;
    }
    public static function updateProject($request,$id){
        self::$project = Project::find($id);
        if ($request->file('image')){
            if (file_exists(self::$project->image)){
                unlink(self::$project->image);
            }
            self::$project->image = self::getImageUrl($request);
        }
        if ($request->file('video')){
            if (file_exists(self::$project->video)){
                unlink(self::$project->video);
            }
            self::$project->video = self::getVideoUrl($request);
        }
        self::$project->user_id = auth()->user()->id;
        self::$project->title = $request->title;
        self::$project->slug = Str::slug($request->title);
        self::$project->short_details = $request->short_details;
        self::$project->long_details = $request->long_details;
        self::$project->category_id = $request->category_id;
        self::$project->code = $request->code;
        self::$project->team_id = json_encode($request->team_id);
        if ($request->client_id != 'No Client'){
            self::$project->client_id = $request->client_id ? $request->client_id : self::$project->client_id;
        }
        self::$project->commit = $request->commit;
        if ($request->start_date != ''){
            self::$project->start_date = $request->start_date ? $request->start_date : self::$project->start_date;
        }

        if ($request->end_date != ''){
            self::$project->end_date = $request->end_date ? $request->end_date : self::$project->end_date;
        }
        self::$project->vendor = $request->vendor;
        self::$project->progress = $request->progress;
        self::$project->panel = $request->panel;
        self::$project->live_status = $request->live_status;
        self::$project->status = $request->status;
        self::$project->save();
        return self::$project;
    }
    public static function updatePublishedStatus($request,$id)
    {
        self::$project = Project::find($id);
        self::$project->status = $request->status;
        self::$project->save();
    }
    public static function deleteProject($id){
        self::$project = Project::find($id);
        if (file_exists(self::$project->image)){
            unlink(self::$project->image);
        }
        if (file_exists(self::$project->video)){
            unlink(self::$project->video);
        }
        self::$project->delete();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
