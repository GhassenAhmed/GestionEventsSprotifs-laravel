<?php

namespace App\Models;
use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public function athletes(){
        return $this->hasMany(Athlete::class);
    }
}
