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
            $table->increments('order_id');
            $table->integer('customer_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('payment_method');
            $table->integer('total');
            $table->integer('status');
            $table->date('date_added');
            $table->date('date_modified');
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
