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
            $table->decimal('price', 15,10)->default(0);
            $table->string('currency');
            $table->integer('country_id');
            $table->integer('region_id');
            $table->integer('city_id');
            $table->integer('category_id');
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
