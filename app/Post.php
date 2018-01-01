<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function PostswithIngredients()
    {
        return $this->hasMany('App\PostswithIngredients',"post_id","id");
    }
}
