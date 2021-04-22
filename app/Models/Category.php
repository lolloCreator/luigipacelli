<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //Per ogni categoria lista post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);    
    }
   
}
