<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table){ 
        $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');//ユーザーID
            $table->unsignedBigInteger('community_id');//コミュニティID
            
          
            $table->Integer('status')->default(0);//0,1,2で表す。
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
            $table->unique(['user_id', 'community_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
