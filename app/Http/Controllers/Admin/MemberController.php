<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function getLevel($user){
        return $this->level[$user->level]["name"];
    }
}
