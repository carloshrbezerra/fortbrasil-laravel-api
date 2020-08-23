<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->boolean('ativo')->default(false);
            $table->bigIncrements('id');
            $table->string('localizacao');
            $table->date('data_abertura');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nome');
            $table->string('nome_fantasia');
            $table->string('atividade');
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
        Schema::dropIfExists('usuario');
    }
}
