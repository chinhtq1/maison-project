<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('title');
            $table->string('slug');
            $table->boolean('is_public')->default(false);
            $table->dateTime('date_public')->nullable();
            $table->text('description')->nullable();
            $table->text('seo')->nullable();
            $table->string('fb_link')->default('#')->nullable();
            $table->json('data')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
