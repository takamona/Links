<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('communities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('name'); // コミュニティ名
            $table->string('genre'); // ジャンル
            $table->integer('participation'); // 参加条件。誰でもOKなら1とか
            $table->integer('authority'); // トピック作成権限。誰でもOKなら 1とかが普通
            $table->text('content'); // 内容
            $table->string('image'); // 画像ファイル名
            $table->timestamps();

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
}
