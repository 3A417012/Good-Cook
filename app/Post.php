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

    public function Cate(){
        return $this->hasOne('App\Category',"id","category_id");
    }

    public function Ingredients(){
        return $this->PostswithIngredients();
    }
}
