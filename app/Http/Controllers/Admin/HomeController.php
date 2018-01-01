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

}
