<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            
            $table->increments('id')->unsigned();
            $table->integer('eventos_id')->unsigned();

            $table->string('name');
            $table->string('link');
            $table->string('local');
            $table->text('descricao');
            $table->text('imagem_1')->nullable();
            $table->text('imagem_2')->nullable();
            $table->text('imagem_3')->nullable();
            $table->text('video')->nullable();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('complemento')->nullable();
            $table->string('assunto')->nullable();
            $table->string('categoria')->nullable();
            $table->string('status')->nullable();
            $table->string('valor')->nullable();
            $table->string('ingressos_qt')->nullable();
            $table->string('ingressos')->nullable();
            $table->string('cupom_id')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->time('hora_final')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_final')->nullable();

            $table->foreign('eventos_id')->references('id')->on('grupos');

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
        Schema::dropIfExists('eventos');
    }
}
