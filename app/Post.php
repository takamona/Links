<?php

namespace App;


use App\User; // 追加
use App\Topic;//追加

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'topic_id', 'content', ];
    
    /**
     * この投稿を所有するユーザ。（ Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
     public function topic()
    {
        return $this->belongsTo(Topic::class);
    
    }
    
    
    
    
}
