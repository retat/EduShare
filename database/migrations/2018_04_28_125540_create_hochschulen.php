<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//artisan migrate
class CreateHochschulen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hochschulen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('standort');
            $table->integer('ranking');
            $table->string('url');
            $table->string('text',10000);
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
        Schema::dropIfExists('hochschulen');
    }
}
