<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostswithIngredients extends Model
{
    //
    protected $table = 'posts_ingredients';
    

    public function Ingredient()
    {
        return $this->hasOne('App\Ingredient',"id","ingredients_id");
    }

}
