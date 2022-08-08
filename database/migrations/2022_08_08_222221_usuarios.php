<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('id');
            $table->String('nome');
            $table->String('carro');
            $table->String('placa');
            $table->String('cpf');
            $table->String('rg');
            $table->String('endereco');
            $table->String('telefone');
            $table->Double('saldo');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
