<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Friend; //追記
use App\Profile; // 追記
use App\Community; // 追記
use App\Event;     //追記

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
     // Profileモデルと1対1のリレーションを張る
    public function profile()
    {
        // Profileモデルのデータを引っ張てくる
        return $this->hasOne(Profile::class);
    }
    
    
    
    /**
     * このユーザーが所有するコミュニティ一覧（ Communityモデルとの1対多の関係を定義）
     */
    public function communities()
    {
        return $this->hasMany(Community::class);
    }
     
    /**
     * このユーザーが所有する承認（コミュニティ）一覧（ Communityモデルとの1対多の関係を定義）
     */
    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
    
    
    /**
     * このユーザーが所有するトピック（ Topicモデルとの1対多の関係を定義）
     */
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
    
    
    
     /**
     * このユーザーが参加しているコミュニティ一覧（中間テーブルを介して取得）
     */
    public function participation_communities()
    {
        return $this->belongsToMany(Community::class, 'participations', 'user_id', 'community_id')->withTimestamps();
    }
    
    // 私がすでにそのコミュニティに参加しているか判定
    public function is_participate($community_id)
    {
        return $this->participation_communities()->where('community_id', $community_id)->exists();
    }
    
    
    
    
    //このユーザーの友達一覧
    public function friends()
    {
        return $this->hasMany(Friend::class);
    }
    
    //このユーザーが所有するイベント一覧
    public function events()
    {
        return $this->hasMany(Event::class);
        
    }
    
    
     /**
     * このユーザーがいいねをしたイベント一覧（中間テーブルを介して取得）
     */
    public function favorites()
    {
        return $this->belongsToMany(Event::class, 'favorites', 'user_id', 'event_id')->withTimestamps();
    }
    
    // いいね追加
    public function favorite($event_id)
    {
        // 既にいいねしているかの確認
        $exist = $this->is_favorite($event_id);
    
        if ($exist) {
            // 既にいいねしていれば何もしない
            return false;
        } else {
            // いいねしていないのであればいいねする
            $this->favorites()->attach($event_id);
            return true;
        }
    }
    
    // いいね解除
    public function unfavorite($event_id)
    {
        // 既にいいねしているかの確認
        $exist = $this->is_favorite($event_id);
    
        if ($exist) {
            // 既にいいねしていればいいねを解除
            $this->favorites()->detach($event_id);
            return true;
        } else {
            // いいねしていない場合
            return false;
        }
    }
    
    // 注目するイベントがすでにいいねされているか判定
    public function is_favorite($event_id)
    {
        return $this->favorites()->where('event_id', $event_id)->exists();
    }
    
    
    
    // 注目するユーザーがすでにフレンド申請送られているか判定
    public function is_friend($user_id)
    {
    
        return $this->friends()->where('user_id', $user_id)->exists();
    }
    
    
}