<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('nome');
            $table->text('descricao');
            $table->string('categoria');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');    
            $table->string('documento');
            $table->string('imagem');
            $table->string('logo');
            $table->string('video');
            $table->string('codigo');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('grupos');
    }
}
