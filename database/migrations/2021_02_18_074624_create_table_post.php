<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *Pour le relation 1:n
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titre',80);
            $table->text('contenu');
            $table->bigInteger('user_id')->unsigned()->index();/** index or nullable */
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::table('posts',function(Blueprint $table){
                $table->dropForeign('user_id');
        });
        Schema::dropIfExists('posts');
    }
}
