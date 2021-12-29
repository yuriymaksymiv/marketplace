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
            $table->string('slug');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('region_id');
            $table->integer('sort')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
