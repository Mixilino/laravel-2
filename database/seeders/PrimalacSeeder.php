<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Primalac;

class PrimalacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Primalac::factory()->count(60)->create();
    }
}
