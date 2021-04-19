<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('tags_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();/** index or nullable */
            
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade') /**valeur possible restrict or cascade or set null */
                  ->onUpdate('cascade');

            $table->foreign('tags_id')
                  ->references('id')
                  ->on('tags')
                  ->onDelete('cascade') /**valeur possible restrict or cascade or set null */
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_tag',function(Blueprint $table){
            $table->dropForeign('tags_id');
            $table->dropForeign('post_id');
    });
        Schema::dropIfExists('post_tag');
    }
}
