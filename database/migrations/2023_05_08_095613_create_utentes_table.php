<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('activo');
            $table->string('nome');
            $table->string('numeroCartao');
            $table->string('contacto')->nullable();
            $table->bigInteger('entidade_id')->unsigned()->nullable();
            $table->foreign('entidade_id') ->references('id')-> on('entidades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('utentes');
    }
}
