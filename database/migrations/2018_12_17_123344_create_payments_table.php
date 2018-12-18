<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger("order_id");
            $table->foreign('order_id')->references('id')->on('orders');
            $table->float('amount')->default('0.0');
            $table->string('transcation_id');
            $table->string('phone_number');
            
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
        Schema::dropIfExists('payments');
    }
}
