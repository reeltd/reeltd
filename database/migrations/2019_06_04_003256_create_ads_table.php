<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('body');
            $table->string('description')->nullable();
            $table->string('summary')->nullable();
            $table->string('contactname')->nullable();
            $table->string('contactemail')->nullable();
            $table->string('contactsite')->nullable();
            $table->string('contactphone')->nullable();
            $table->string('location')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('mapurl')->nullable();
            $table->string('curl')->nullable();
            $table->string('reviews')->nullable();
            $table->integer('visits')->nullable();
            $table->string('rating')->nullable();
            $table->string('comments')->nullable();
            $table->string('status')->nullable();
            $table->string('img1')->default('ad.svg');
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->string('img8')->nullable();
            $table->string('img9')->nullable();
            $table->string('img10')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
