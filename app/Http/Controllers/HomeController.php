<?php

namespace App\Http\Controllers;

use App\Models\EvenementSportif;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $eventSportifs=EvenementSportif::all();
        $data=[
            "titel"=>"Evènement sportif",
            "description"=>"Liste des evénement sportifs",
            "heading"=>config("app.name"),
            "eventsSportifs"=>$eventSportifs
        ];
        return view("home.index",$data);
    }
}
