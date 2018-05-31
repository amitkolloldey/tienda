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
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');
            $table->string('billing_firstname');
            $table->string('billing_email');
            $table->string('billing_lastname');
            $table->string('billing_city');
            $table->string('billing_country');
            $table->string('billing_state');
            $table->string('billing_postcode');
            $table->string('billing_address');
            $table->string('billing_phone');
            $table->string('billing_altphone')->nullable();
            $table->string('payment_option')->default('cod');
            $table->string('billing_name_on_card')->nullable();
            $table->integer('billing_discount')->default(0)->nullable();
            $table->string('billing_discount_code')->nullable();
            $table->integer('billing_subtotal');
            $table->integer('billing_tax');
            $table->integer('billing_total');
            $table->string('order_status')->default('on_review');
            $table->string('payment_status')->default('paid');
            $table->string('error')->nullable();
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
