<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            

            $table->string('company')->nullable();
            $table->string('email');
            $table->string('contact');
            $table->string('country')->default('BD');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('status')->default(0)->comments('1=Delivered 0=pending 2=processing');
            $table->string('payment_status')->default(1)->comments('1=paid 2=pending');
            $table->string('payment_type')->default('cash');
            $table->string('grand_total')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('order_note')->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
