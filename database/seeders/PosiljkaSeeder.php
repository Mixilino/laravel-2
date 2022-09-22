<?php

namespace Database\Seeders;

use App\Models\Posiljka;
use Illuminate\Database\Seeder;

class PosiljkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posiljka::factory()->count(100)->create();
    }
}
