<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfoliocategory extends Model
{
    //Da portfolio a categoria
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    //Da categoria a portfolio -- Start
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'cat_id');
    }

}
