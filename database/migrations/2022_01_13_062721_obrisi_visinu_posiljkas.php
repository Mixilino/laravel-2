<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiVisinuPosiljkas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posiljkas', function (Blueprint $table) {
            $table->dropColumn('visina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posiljkas', function (Blueprint $table) {
            $table->after('tezina', function ($table) {
                $table->double('visina', 8, 2);
            });
        });
    }
}
