<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLtin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ltin', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->integer('tloai_id')->unsigned();
            $table->foreign('tloai_id')
                  ->references('id')
                  ->on('tloai')
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
        Schema::dropIfExists('ltin');
    }
}
