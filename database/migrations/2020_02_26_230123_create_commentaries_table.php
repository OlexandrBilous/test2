<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment');
            $table->timestamps();

            $table->bigInteger('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id', 'comments_articles_id_articles_id')
                ->on('articles')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'comments_user_id_users_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_articles_id_articles_id');
            $table->dropForeign('comments_user_id_users_id');
        });
        Schema::dropIfExists('comments');
    }
}
