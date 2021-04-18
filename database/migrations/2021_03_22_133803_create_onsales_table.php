<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsales', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('slug');
            $table->string('unit_price');
            $table->string('description');
            $table->string('specification');
            $table->string('summary');
            $table->foreignid('category_id');
            $table->string('image');
            $table->foreignid('brand_id');
            $table->foreignid('subcategory_id');
            $table->softDeletes();
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
        Schema::dropIfExists('onsales');
    }
}
