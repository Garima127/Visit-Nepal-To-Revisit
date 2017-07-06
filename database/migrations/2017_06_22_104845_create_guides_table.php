<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('language');
            $table->string('contact');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('experience');
            $table->string('address');
            $table->string('age');
            $table->string('gender');
            $table->mediumText('description');
            $table->string('bio');
            $table->binary('image')->nullable();
            $table->string('expenses');
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
        Schema::dropIfExists('guides');
    }
}
