<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostswithIngredients extends Model
{
    //
    protected $table = 'postswithingredients';

    public function Ingredients()
    {
        return $this->hasOne('App\Ingredients',"id","ingredients_id");
    }

}
