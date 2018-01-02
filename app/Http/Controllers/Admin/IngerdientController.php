<?php

namespace App\Http\Controllers\Admin;

use App\Ingredient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IngerdientController extends AdminController
{
    public function list(){
        $ingredients = Ingredient::all();
        return view("admin.ingredient.list")->with("ingredients",$ingredients);
    }

    public function add(){
        return view("admin.ingredient.edit");
    }

    public function store(Request $request){
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->unit = $request->unit;
        $ingredient->heat = $request->heat;
        $ingredient->save();
        return redirect()->route("admin.ingredient.list")->with("message","新增成功");
    }

    public function edit($id){
        $ingredient = Ingredient::find($id);
        return view("admin.ingredient.edit")->with("ingredient",$ingredient);
    }

    public function update($id,Request $request){
        $ingredient = Ingredient::find($id);
        $ingredient->name = $request->name;
        $ingredient->unit = $request->unit;
        $ingredient->heat = $request->heat;
        $ingredient->save();
        return redirect()->route("admin.ingredient.list")->with("message","更新成功");
    }

    public function delete($id,Request $request){
        $ingredient = Ingredient::find($id);
        $ingredient ->delete();
        return redirect()->route("admin.ingredient.list")->with("message","刪除成功");
    }
}
