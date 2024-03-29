<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomeDoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nome_do_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->string('email', 80);
            $table->integer('motivo_contato');
            $table->text('mensagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nome_do_models');
    }
}
