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
        Schema::create('commentaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment');
            $table->timestamps();

            $table->bigInteger('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id', 'commentaries_articles_id_articles_id')
                ->on('articles')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'commentaries_user_id_users_id')
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
        Schema::table('commentaries', function (Blueprint $table) {
            $table->dropForeign('commentaries_articles_id_articles_id');
            $table->dropForeign('commentaries_user_id_users_id');
        });
        Schema::dropIfExists('commentaries');
    }
}
