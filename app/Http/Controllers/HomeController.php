<?php

namespace App\Http\Controllers;

use App\Models\EvenementSportif;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $eventsSportifs = EvenementSportif::all();
        $data=[
            'title'=> 'Evènnements sportifs',
            'description'=>'Liste des évènnements sportifs',
            'heading'=> config('app.name'),
            'eventSportifs' => $eventsSportifs
        ];
        return view('home.index',$data);
    }
}
