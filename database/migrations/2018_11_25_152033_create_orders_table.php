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
            $table->string('charge_id')->nullable();
            $table->string('receiver_name');
            $table->integer('receiver_mobile');
            $table->string('receiver_address');
            $table->bigInteger('civil_id');
            $table->string('country')->nullable();
            $table->decimal('amount', 8, 2);
            $table->integer('charges')->nullable();
            $table->string('order_type');
            $table->integer('code')->nullable();
            $table->decimal('converted_amount', 8, 2)->nullable();
            $table->boolean('saved')->nullable();
            $table->string('status');
            $table->string('location_data')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
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
