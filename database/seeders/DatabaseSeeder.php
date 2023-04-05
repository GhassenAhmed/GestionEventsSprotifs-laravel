<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\EvenementSportif;
use App\Models\Athlete;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(2)
        ->has(EvenementSportif::factory()
                ->count(1)
                ->has(Categorie::factory()
                ->count(3)
                ->state(new Sequence(
                    ['nom'=>'Minim'],
                    ['nom'=>'Cadet'],
                    ['nom'=>'Senior'],
                ))
                ->state(new Sequence(
                    ['sexe'=>'HOMME'],
                    ['sexe'=>'FEMME'],
                ))
                ->state(new Sequence(
                    ['poids'=>'-40 KG'],
                    ['poids'=>'-50 KG'],
                    ['poids'=>'+50 KG'],
                ))
                ->has(Athlete::factory()
                    ->count(2)
                    ->state(function(array $attributes,Categorie $categorie){
                        return ['sexe'=>$categorie->sexe];
                    })
                    ->for(Equipe::factory())
                    ->hasCommentaires(2)
                )
                )
                ->hasCommentaires(2)
        )
        ->create();

    }
}
