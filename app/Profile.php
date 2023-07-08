<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // 追加
Use APP\Topic; //追加


class Profile extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'gender', 'address', 'hobby', 'introduction', 'image',
    ];
    
    // Userモデルと1対1のリレーションを張る
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
