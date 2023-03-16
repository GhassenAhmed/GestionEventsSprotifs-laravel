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
        return [
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'photo'=>$this->faker->imageUrl(360,360,true),
        ];
    }
}
