<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiteralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('literal', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('key')->default(0);
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('language');
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
        Schema::dropIfExists('literal');
    }
}
