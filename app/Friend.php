<?php

namespace App;

use App\User;//追加
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{

    protected $fillable = ['user_id', 'friend_id','status', ];
    
    
    
    /**
     * このフレンド申請を所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    //  /**
    //  * この申請を所有するユーザー一覧（中間テーブルを介して）
    //  */
    // public function friends_users()
    // {
    //     return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')->withTimestamps();
    // }
    
}
