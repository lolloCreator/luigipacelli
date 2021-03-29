<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    //Da portfolio a categoria -- Start
    public function categorie()
    {
        return $this->hasMany(Portfoliocategory::class, 'id');
    }

    //Da categoria a portfolio
    public function categoria()
    {
        return $this->belongsTo(Portfoliocategory::class);
    }
}
