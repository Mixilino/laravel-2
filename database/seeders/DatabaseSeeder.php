<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PosiljkaSeeder;
use Database\Seeders\KurirSeeder;
use Database\Seeders\PrimalacSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kurir = new KurirSeeder;
        $primalac = new PrimalacSeeder;
        $posiljka = new PosiljkaSeeder;

        $kurir->run();
        $primalac->run();
        $posiljka->run();
    }
}
