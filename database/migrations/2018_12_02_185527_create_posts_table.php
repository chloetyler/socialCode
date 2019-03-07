<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('body');
                $table->unsignedInteger('category')->nullable();
                $table->foreign('category')->refrences('id')->on('categories');
                $table->timestamps();
//            $table->string('created_by');
//            $table->timestamps('created_at');
//            $table->integer('last_modified_by');
//            $table->timestamps('last_modified_at');
//            $table->integer('deleted_by');
//            $table->timestamps('deleted_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
