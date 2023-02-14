<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'genre', 'description', 'director', 'release_date'];

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
    
    public function production_company(){
        return $this->belongsTo(ProductionCompany::class);
    }
}
