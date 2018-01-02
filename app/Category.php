<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'categorys';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function posts()
    {
        return $this->hasMany('App\Post',"category_id","id");
    }
}
