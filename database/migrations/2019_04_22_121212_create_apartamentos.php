<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->integer('n_apt');
            $table->primary('n_apt');
            $table->string('responsavel', 100);
            $table->float('vlr_agua', 100);
            $table->float('vlr_gas', 100);
            $table->float('med_agua', 100);
            $table->float('med_gas', 100);
            $table->float('vlr_total', 100);
            $table->foreign('responsavel')->references('nome_usuario')->on('usuario');
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
        Schema::dropIfExists('apartamentos');
    }
}