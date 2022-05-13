<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // 追加
use App\Community; //追加
use App\Post; //追加

class Topic extends Model
{
    protected $fillable = ['user_id', 'community_id', 'title', 'content', 'image', 'disdosure_range',];
     
    /**
     * このトピックを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このトピックを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function community()
    {
        return $this->belongsTo(Community::class);
    }
    
     public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
}