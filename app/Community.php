<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; //追加


class Community extends Model
{
    
    
    
    
       protected $fillable = ['user_id', 'name', 'genre', 'participation', 'authority', 'content', 'image',];







    /**
     * このコミュニティを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

