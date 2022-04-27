<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile; // 追記
use App\Community; // 追記


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
    public function community_approvals()
    {
        return $this->hasMany(Community_approval::class);
    }
    
}
