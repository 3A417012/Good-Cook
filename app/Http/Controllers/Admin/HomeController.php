<?php

namespace App\Http\Controllers\Admin;

use App\Ingredient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return view("admin.index");
    }

    public function postadd(){
        return view("admin.post.edit");
    }

    public function ingredientlist(){
        $ingredients = Ingredient::all();
        return view("admin.ingredient.list")->with("ingredients",$ingredients);
    }

    public function ingredientadd(){
        return view("admin.ingredient.edit");
    }

    public function ingredientstore(Request $request){
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->unit = $request->unit;
        $ingredient->heat = $request->heat;
        $ingredient->save();

        return redirect()->route("admin.ingredient.add");
    }
}
