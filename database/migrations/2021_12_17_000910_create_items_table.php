<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('crypto_price', 15,10)->default(0);
            $table->string('crypto_currency');
            $table->decimal('price', 15,10)->nullable();
            $table->string('currency')->nullable();
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->integer('category_id');
            $table->integer('sub1_category_id')->default(0);
            $table->integer('sub2_category_id')->default(0);
            $table->integer('views')->default(0);
            $table->string('slug')->unique();
            $table->string('type');
            $table->string('status');
            $table->tinyInteger('published')->default(0);
            $table->tinyInteger('crypto_pay')->default(1);
            $table->tinyInteger('prepayment')->default(0);
            $table->tinyInteger('cash_on_delivery')->default(0);
            $table->tinyInteger('self_pickup')->default(0);
            $table->tinyInteger('city_delivery')->default(0);
            $table->tinyInteger('country_delivery')->default(0);
            $table->tinyInteger('int_delivery')->default(0);
            $table->string('image');
            $table->tinyInteger('check')->default(0);

            $table->dateTime('promo_at')->nullable();
            $table->dateTime('sort_at');
            $table->dateTime('ends_at');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
