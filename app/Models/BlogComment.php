<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function replies(){
        return $this->hasMany(BlogCommentReply::class,'comment_id');
    }
}
