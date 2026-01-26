<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recettes()
    {
        return $this->belongsToMany(Recette::class);
    }
}
