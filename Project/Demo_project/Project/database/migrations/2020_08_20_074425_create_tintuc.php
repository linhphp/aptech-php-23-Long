<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title',500);
            $table->string('slug')->unique();
            $table->text('description',500);
            $table->longtext('content');
            $table->string('post_image');
            $table->integer('ltin_id')->unsigned();
            $table->foreign('ltin_id')
                  ->references('id')
                  ->on('ltin')
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
        Schema::dropIfExists('tintuc');
    }
}
