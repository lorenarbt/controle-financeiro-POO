<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('bancos');
            $table->double('value',8,2);
            $table->date('ini_month')->nullable();
            $table->unsignedInteger('deadline')->nullable();
            $table->foreign('deadline')->references('id')->on('prazos');
            $table->unsignedInteger('method');
            $table->foreign('method')->references('id')->on('metodo_pagamentos');
            $table->string('receiver');
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
        Schema::dropIfExists('transferencias');
    }
}
