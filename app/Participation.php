<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; //追加
use App\Community; //追加


class Participation extends Model
{

        protected $fillable = [ 'user_id', 'community_id','status', ];

    /**
     * この承認(コミュニティ)を所有するコミュニティ。（Communityモデルとの多対1の関係を定義）
     */
    public function community(){
        return $this->belongsTo(Community::class);
    }
    
    /**
     * この承認(コミュニティ)承認を所有するユーザ-。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
