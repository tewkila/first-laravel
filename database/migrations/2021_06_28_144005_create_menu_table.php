<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('url')->default(0);
            $table->integer('lang_id')->default(0);
//            $table->string('drop_down')->nullable();
            $table->integer('sort')->default(0);

            $table->unsignedBigInteger('drop_down')->nullable();
            $table->foreign('drop_down')->references('id')->on('menu')->onDelete('cascade');

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
        Schema::dropIfExists('menu');
    }
}
