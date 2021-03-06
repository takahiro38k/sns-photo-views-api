<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * relation
     * User 1:N Comment
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * relation
     * Post 1:N Comment
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
