<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KurirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazivFirme' => $this->faker->company(),
            'pib' => $this->faker->numerify('#######'),
            'maticniBroj' => $this->faker->numerify('#######'),
            'adresa' => $this->faker->streetAddress(),
            'website' => $this->faker->url()
        ];
    }
}
