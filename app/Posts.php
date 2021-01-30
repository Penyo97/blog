<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id','user', 'text','img','post_time'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comments');
    }
}
