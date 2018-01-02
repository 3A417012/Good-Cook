<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colletion extends Model
{
    //
    protected $table = 'colletion';

    public function posts()
    {
        return $this->hasMany('App\Post',"id","post_id");
    }

    public function users()
    {
        return $this->hasMany('App\User',"id","user_id");
    }
}
