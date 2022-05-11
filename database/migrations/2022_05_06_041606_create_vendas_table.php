<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->integer('carteira_id')->unsigned();
            $table->integer('cupom_id')->unsigned();
            $table->integer('eventos_id')->unsigned();
            $table->integer('ingressos_id')->unsigned();
            $table->string('codigo');
            $table->string('valor');
            $table->string('status');
            $table->string('desconto');
            $table->foreign('eventos_id')->references('id')->on('eventos');
            $table->foreign('cupom_id')->references('id')->on('cupom');
            $table->foreign('carteira_id')->references('id')->on('carteira');
            $table->foreign('ingressos_id')->references('id')->on('ingressos');


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
        Schema::dropIfExists('vendas');
    }
}
