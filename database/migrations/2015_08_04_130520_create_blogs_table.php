<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('slug')->default('');
            $table->text('short_description')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->boolean('status')->default(true)->comment('1 : PUBLISHED, 0 : DRAFT');
            $table->tinyInteger('type')->default(0)->comment('0 : bài viết , 1 : tin tức');
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
