<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; //追加
use App\Topic; // 追加


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
    
    /**
     * このコミュニティが所有するトピック一覧（Topicモデルとの1対多の関係を定義）
     */
     public function topics()
    {
        return $this->hasMany(Topic::class);
    }



    /**このコミュニティが所有する参加申請
         * 
     */
    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
    
    
    /**
     * このコミュニティに参加している人の一覧（中間テーブルを介して取得）
     */
    public function participation_users()
    {
        return $this->belongsToMany(User::class, 'participations', 'community_id','user_id')->withTimestamps();
    }
    
}