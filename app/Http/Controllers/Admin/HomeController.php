<?php

namespace App\Http\Controllers\Admin;


use App\Ingredient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends AdminController
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

    public function ingredientedit($id){
        $ingredient = Ingredient::find($id);
        return view("admin.ingredient.edit")->with("ingredient",$ingredient);
    }

    public function ingredientupdate($id,Request $request){
        $ingredient = Ingredient::find($id);
        $ingredient->name = $request->name;
        $ingredient->unit = $request->unit;
        $ingredient->heat = $request->heat;
        $ingredient->save();
        return redirect()->route("admin.ingredient.list");
    }
}
