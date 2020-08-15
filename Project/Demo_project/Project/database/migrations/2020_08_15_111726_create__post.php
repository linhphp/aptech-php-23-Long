<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',500);
            $table->string('slug')->unique();
            $table->text('description',500);
            $table->longtext('content');
            $table->string('post_image');
            $table->integer('theloai_id')->unsigned();
            $table->foreign('theloai_id')
                  ->references('id')
                  ->on('theloai')
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
        Schema::dropIfExists('_post');
    }
}
