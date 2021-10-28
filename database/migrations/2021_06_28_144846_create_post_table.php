<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('url')->default(0);
            $table->integer('lang_id')->default(0);
            $table->string('menu_item')->nullable();
            $table->string('img')->default(0);
            $table->integer('sort')->default(0);
            $table->string('description')->nullable();
            $table->integer('action')->default(0);
            $table->integer('status')->nullable();

            $table->unsignedBigInteger('user_id');

            //$table->unique(['user_id']); //რომ ყველა მნიშვნელობა განსხვავებული იყოს.
            $table->foreign('user_id')->references('id')->on('users'); //განსაზღვრავს user_id-ის სვეტს პოსტების ცხრილში

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
        Schema::dropIfExists('post');
        Schema::dropIfExists('products');
    }
}


