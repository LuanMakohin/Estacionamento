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
            $table->unsignedBigInteger('id_cadastro');
            $table->integer('vaga')->nullable();
            $table->double('saldo_cartao')->nullable();
            $table->dateTime('hora_entrada')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();


            $table->foreign('id_cadastro')->references('id_cadastro')->on('cadastros')->onDelete('CASCADE');
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
