<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->increments('id');
            $table->string('receiver_name');
            $table->integer('receiver_mobile');
            $table->string('receiver_address');
            $table->integer('civil_id');
            $table->string('country');
            $table->integer('amount');
            $table->string('order_type');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
