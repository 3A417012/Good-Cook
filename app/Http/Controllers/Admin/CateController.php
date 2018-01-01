<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends AdminController
{
    //
    public function index(){
        $cates = Category::all();
        return view("admin.cate.list")->with("cates",$cates);
    }

    public function add(){
        return view("admin.member.edit");
    }
}
