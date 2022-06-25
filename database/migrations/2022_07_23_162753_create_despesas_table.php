<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('desc');
            $table->boolean('fixed');
            $table->date('ini_date');
            $table->date('end_date')->nullable();
            $table->unsignedInteger('deadline')->nullable();
            $table->foreign('deadline')->references('id')->on('prazos');
            $table->unsignedInteger('relevance')->nullable();
            $table->foreign('relevance')->references('id')->on('relevancias');
            $table->unsignedInteger('type')->nullable();
            $table->foreign('type')->references('id')->on('categorias');
            $table->double('value',8,2);
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
        Schema::dropIfExists('despesas');
    }
}
