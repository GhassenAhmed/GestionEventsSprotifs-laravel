<?php

namespace App\Models;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvenementSportif extends Model
{
    use HasFactory;
    public function organisateur(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->hasMany(Categorie::class);
    }
    public function athletes(){
        return $this->hasManyThrough(Athlete::class,Categorie::class);
    }
    public function commentaires(){
        return $this->morphMany(Commentaire::class,'commentable');
    }
}
