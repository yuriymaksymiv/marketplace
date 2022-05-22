<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('en');
            $table->string('ru');
            $table->string('uk');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id');
            $table->integer('sort')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
