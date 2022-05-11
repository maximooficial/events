<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->data('data')->nullable();
            $table->string('imagem')->nullable();
            $table->string('botao')->nullable();
            $table->string('link')->nullable();
            $table->string('dia')->nullable();
            $table->string('hora')->nullable();
            $table->string('minuto')->nullable();
            $table->string('segundo')->nullable();
            $table->string('contador')->nullable();


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
        Schema::dropIfExists('slides');
    }
}
