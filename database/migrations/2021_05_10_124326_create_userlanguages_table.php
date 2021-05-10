<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserlanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlanguages', function (Blueprint $table) {
            
            $table->bigIncrements('u_id');
            /*
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('registrations');
            $table->unsignedBigInteger('l_id')->nullable();
            $table->foreign('l_id')->references('language_id')->on('languages');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('l_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            */
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
        Schema::dropIfExists('userlanguages');
    }
}
