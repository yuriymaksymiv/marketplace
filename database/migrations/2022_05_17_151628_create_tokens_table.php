<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ref_id')->nullable();
            $table->string('status');
            $table->integer('amount');
            $table->string('type');
            $table->date('order_date');
            $table->date('payment_date');
            $table->tinyInteger('published')->default(1);
            $table->tinyInteger('suspicion')->default(0);
            $table->integer('day')->nullable();
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}
