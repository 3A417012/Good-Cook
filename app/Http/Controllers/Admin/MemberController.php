<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class MemberController extends AdminController
{
    //
    public function index(){
        $users = User::all()->except("password");
        foreach ($users as $user){
            $user->levelname = $this->getLevel($user);
        }
        return view("admin.member.list")->with("users",$users);
    }

    public function add(){
        return view("admin.member.edit");
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();
        return redirect()->route("admin.member.list")->with("message","新增成功");
    }

    public function edit($id){
        $user = User::find($id);
        return view("admin.member.edit")->with("user",$user);
    }

    public function update($id,Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->save();
        return redirect()->route("admin.member.list")->with("message","更新成功");
    }

    public function delete($id,Request $request){
        $user = User::find($id);
        $user ->delete();
        return redirect()->route("admin.member.list")->with("message","刪除成功");
    }
}
