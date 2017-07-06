<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMythsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('history');
            $table->string('place');
            $table->mediumText('description');
            $table->string('community');
            $table->binary('image')->nullable();
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
        Schema::dropIfExists('myths');
    }
}
