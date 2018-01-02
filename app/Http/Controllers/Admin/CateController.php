<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends AdminController
{
    public function index(){
        $cates = Category::all();
        return view("admin.cate.list")->with("cates",$cates);
    }

    public function add(){
        return view("admin.cate.edit");
    }

    public function store(Request $request){
        $cate = new Category();
        $cate->name = $request->name;
        $cate->description = $request->description;
        $cate->save();
        return redirect()->route("admin.cate.list")->with("message","新增成功");
    }

    public function edit($id){
        $cate = Category::find($id);
        return view("admin.cate.edit")->with("cate",$cate);
    }

    public function update($id,Request $request){
        $cate = Category::find($id);
        $cate->name = $request->name;
        $cate->description = $request->description;
        $cate->save();
        return redirect()->route("admin.cate.list")->with("message","更新成功");
    }

    public function delete($id,Request $request){
        $cate = Category::find($id);
        $cate ->delete();
        return redirect()->route("admin.cate.list")->with("message","刪除成功");
    }

}
