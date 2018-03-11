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
            $table->increments('id');
            $table->timestamp('trans_date');
            $table->string('order');
            $table->integer('quantity');
            $table->integer('total_cost');
            $table->integer('cust_id');
            $table->integer('cust_fname');
            $table->integer('cust_lname');
            $table->integer('user_id');
            $table->string('handled_by');
            $table->string('order_placed'); // determine if ordered online or on-site
            $table->string('status');
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
