<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $table = 'recettes';

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
}
