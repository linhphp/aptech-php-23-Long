<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_name')->unique();
            $table->string('product_price');
            $table->integer('product_unit');
            $table->text('product_desc');
            $table->string('product_image');
            $table->integer('product_cate')->unsigned();
            $table->foreign('product_cate')
                  ->references('id')
                  ->on('category_product')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
