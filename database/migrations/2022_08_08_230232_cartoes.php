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
        Schema::enableForeignKeyConstraints();
        Schema::create('cartoes', function (Blueprint $table) {
            $table->bigIncrements('id_cartao');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_vaga');
            $table->date('hora_entrada');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('CASCADE');
            $table->foreign('id_vaga')->references('id_vaga')->on('vagas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_cartoes');
    }
};
