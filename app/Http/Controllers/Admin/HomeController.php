<?php

namespace App\Http\Controllers\Admin;


use App\User;

use App\Ingredient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            return $next($request);
        });
    }

    public function index(){
        return view("admin.index");
    }

    public function postadd(){
        return view("admin.post.edit");
    }

    public function ingredientlist(){
        return view("admin.ingredient.list");
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
        return redirect()->route("admin.ingredient.list");
    }
}
