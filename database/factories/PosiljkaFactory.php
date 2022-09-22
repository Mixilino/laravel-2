<?php

namespace Database\Factories;

use App\Models\Kurir;
use App\Models\Primalac;
use Illuminate\Database\Eloquent\Factories\Factory;

class PosiljkaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sifraPosiljke' => $this->faker->unique()->domainWord(),
            'tezina' => $this->faker->numberBetween($min = 1, $max = 5000),
            'adresa' => $this->faker->streetAddress(),
            'kurir_id' => Kurir::factory(),
            'primalac_id' => Primalac::factory()
        ];
    }
}
