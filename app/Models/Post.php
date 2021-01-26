<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function likes() 
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    
    public function category()
    {
        return $this->belongsTo(category::class);
    }

}
