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
            $table->string('name');
            $table->string('game');
            $table->string('paticipation');
            $table->string('authority');
            $table->text('content');
            $table->string('image');
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
