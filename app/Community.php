<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; //追加


class Community extends Model
{
    
    
    
     protected $fillable = [
      'name', 'game', 'paticipation', 'authority', 'image', 'content',
    ];


    /**
     * このコミュニティを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

