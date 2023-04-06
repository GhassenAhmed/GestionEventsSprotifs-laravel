<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AthleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $width=200;
        $height=200;
        $path=$this->faker->image('storage/images',$width,$height,'person',true,true,'person',false);
        return [
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'photo'=>$path,
        ];
    }
}
