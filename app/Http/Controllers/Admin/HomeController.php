<?php

namespace App\Http\Controllers\Admin;

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
        return view("admin.ingredient.list");
    }

    public function ingredientadd(){
        return view("admin.ingredient.edit");
    }
}
