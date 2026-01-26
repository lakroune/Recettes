<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
   
}
