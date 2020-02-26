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
            $table->integer('articles_id')->unsigned()->index();
            $table->string('comment');
            $table->integer('user_id')->index();
            $table->timestamps();
        });
        Schema::table('commentaries', function (Blueprint $table) {
            $table->foreign('articles_id', 'commentaries_articles_id_commentaries_id')
                ->references('id')
                ->on('commentaries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id', 'articles_user_id_users_id')
                ->references('id')
                ->on('users')
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
        $table->dropForeign('commentaries_articles_id_commentaries_id');
        $table->dropColumn('articles_id');
    });
        Schema::table('commentaries', function (Blueprint $table) {
            $table->dropForeign('articles_user_id_users_id');
            $table->dropColumn('user_id');
        });
    }
}
