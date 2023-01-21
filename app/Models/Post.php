<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'photo', 
        'video',
        'title', 
        'user_id',
        'body'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }

    // public function comments()
    // {
    //     $this->hasMany(Comment::class, 'post_id', 'id');
    // }
    
}
