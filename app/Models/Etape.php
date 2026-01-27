<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    protected $table = 'etapes';
    protected $fillable = ['recette_id', 'description_etape', 'ordre_etape'];
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
