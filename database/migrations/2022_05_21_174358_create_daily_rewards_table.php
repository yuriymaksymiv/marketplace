<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyRewardsTable extends Migration
{

    public function up()
    {
        Schema::create('daily_rewards', function (Blueprint $table) {
            $table->id();
            $table->integer('day')->nullable();
            $table->integer('token')->nullable();
            $table->text('task')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('daily_rewards');
    }
}
