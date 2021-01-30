<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'post_id','user', 'text','comment_time'
    ];
    public function post()
    {
        return $this->belongsTo('App\Posts');
    }
}
