<?php

namespace App\Models;
use App\Models\EvenementSportif;
use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   
   
 public function athletes(){
        return $this->hasMany(Athlete::class);
    }

}
