<?php

namespace App;


use App\User; //追加
use App\Community; //追加

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [ 'user_id', 'community_id','title','content'];
    
    /**
     * このイベントを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
     /**
     * このイベントを所有するコミュニティ。（Communityモデルとの多対1の関係を定義）
     */
     public function community(){
        return $this->belongsTo(Community::class);
    }
    
    
    /**
     * このイベントにいいねをしたユーザー一覧（中間テーブルを介して）
     */
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'event_id', 'user_id')->withTimestamps();
    }
    
}
