<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosiljkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posiljkas', function (Blueprint $table) {
            $table->id();
            $table->string('sifraPosiljke')->unique();
            $table->double('tezina', 8, 2);
            $table->double('visina', 8, 2);
            $table->string('adresa');
            $table->foreignId('kurir_id')->constrained('kurirs');
            $table->foreignId('primalac_id')->constrained('primalacs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posiljkas');
    }
}
