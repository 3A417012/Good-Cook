<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function findIngredient($ingredient){
        $ing = Ingredient::where("name",$ingredient)->first();
        if(isset($ing)){
            $arr = [
                "status" => "success",
                "data" => $ing,
            ];
        }else{
            $arr = [
              "status" => "error"
            ];
        }
        return response()->json($arr);
    }
}
