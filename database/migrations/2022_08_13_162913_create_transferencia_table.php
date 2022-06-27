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
            $table->string('desc');
            $table->unsignedInteger('way');
            $table->foreign('way')->references('id')->on('sentido_transferencias');
            $table->double('value',8,2);
            $table->unsignedInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('bancos');
            $table->date('date')->nullable();
            $table->unsignedInteger('method');
            $table->foreign('method')->references('id')->on('metodo_pagamentos');
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
