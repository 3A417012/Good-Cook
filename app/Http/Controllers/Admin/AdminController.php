<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //
    protected $user;
    protected $level = [
        0 => [
            "likelimit" => "5",
            "name" => "一般會員",
            "lists" => [
                '文章管理' => 'admin.ingredient.list',
                '收藏管理' => 'admin.ingredient.list',
            ],
        ],
        5 => [
            "likelimit" => "10",
            "name" => "管理員",
            "lists" => [
                '文章管理' => 'admin.ingredient.list',
                '收藏管理' => 'admin.cate.list',
                '會員管理' => 'admin.member.list',
                '分類管理' => 'admin.cate.list',
                '食材管理' => 'admin.ingredient.list',
            ],
        ],
    ];


    protected $list;

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::check()){
                $this->user= Auth::user();
                $this->list = $this->level[$this->user->level]["lists"];
                View::share('list', $this->list);
            }
            return $next($request);
        });
    }

    public function getLevel($user){
        return $this->level[$user->level]["name"];
    }

}
