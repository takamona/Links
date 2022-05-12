<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;//追加




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
    
}
