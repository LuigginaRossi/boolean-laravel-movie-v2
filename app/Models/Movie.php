<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'genre', 'description', 'director', 'release_date', 'production_company_id'];

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
    
    public function productionCompany(){
        return $this->belongsTo(ProductionCompany::class);
    }
}
