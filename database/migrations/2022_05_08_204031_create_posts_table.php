<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->unsigned();
            $table->string('nome');
            $table->string('link');
            $table->text('post')->nullable();
            $table->text('descricao');
            $table->string('imagem_1')->nullable();
            $table->string('imagem_2')->nullable();
            $table->string('imagem_3')->nullable();
            $table->string('video')->nullable();
            $table->string('botao')->nullable();
            $table->string('assunto')->nullable();
            $table->string('categoria')->nullable();
            $table->string('status')->nullable();
            $table->string('codigo')->nullable();
            $table->text('tags')->nullable();
            $table->text('contador')->nullable();
            $table->foreign('post_id')->references('id')->on('users');

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
        Schema::dropIfExists('posts');
    }
}
