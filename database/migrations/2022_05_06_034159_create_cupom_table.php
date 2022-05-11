<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCupomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cupom_id')->unsigned();
            $table->timestamps();
            $table->string('nome');
            $table->string('codigo');
            $table->string('descricao');
            $table->date('inicio');
            $table->date('fim');
            $table->time('hora');
            $table->time('hora_final');
            $table->string('quantidades');
            $table->foreign('cupom_id')->references('id')->on('eventos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupom');
    }
}
