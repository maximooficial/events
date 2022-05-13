<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingressos_id')->unsigned();
            $table->string('nome');
            $table->text('descricao');
            $table->string('tipo');
            $table->string('valor');
            $table->string('desconto');
            $table->string('codigo');
            $table->string('status');
            $table->foreign('ingressos_id')->references('id')->on('grupo');

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
        Schema::dropIfExists('ingressos');
    }
}
