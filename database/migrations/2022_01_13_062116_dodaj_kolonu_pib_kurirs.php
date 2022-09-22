<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuPibKurirs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kurirs', function (Blueprint $table) {
            $table->after('nazivFirme', function ($table) {
                $table->integer('pib');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kurirs', function (Blueprint $table) {
            $table->dropColumn('pib');
        });
    }
}
