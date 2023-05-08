<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaSaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_saidas', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('activo');
            $table->double('abate');
            $table->bigInteger('utente_id')->unsigned()->nullable();
            $table->foreign('utente_id') ->references('id')-> on('utentes')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('carro_id')->unsigned()->nullable();
            $table->foreign('carro_id') ->references('id')-> on('carros')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entrada_saidas');
    }
}
