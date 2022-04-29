<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->integer('parent_id')->unsigned();
           $table->text('body');
           $table->integer('commentable_id')->unsigned();
           $table->string('commentable_type');
           $table->timestamps();
        });
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
