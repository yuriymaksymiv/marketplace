<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirdropsTable extends Migration
{

    public function up()
    {
        Schema::create('airdrops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ref_id')->nullable();
            $table->string('status');
            $table->tinyInteger('suspicion')->default(0);
            $table->string('telegram')->nullable()->unique();
            $table->string('twitter')->nullable()->unique();
            $table->string('bep_20')->nullable()->unique();
            $table->text('note')->nullable(); // ref_id

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airdrops');
    }
}
