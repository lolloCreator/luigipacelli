<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //per ogni post a categoria
    public function categorie()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');    
    }
   


    public function categoria()
    {
        return $this->belongsTo(Category::class);    
    }
   
}
