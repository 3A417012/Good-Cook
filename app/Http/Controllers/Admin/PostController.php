<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\Ingredient;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostswithIngredients;
use Illuminate\Http\Request;

class PostController extends AdminController
{
    //
    /**
     * @return $this
     */
    public function index(){
        $posts = Post::all();
        return view("admin.post.list")->with("posts",$posts);
    }

    public function add(){
        $cates = Category::all();
        return view("admin.post.edit")->with("cates",$cates);
    }

    public function store(Request $request){
        dd($this->findIngredient("西瓜"));
    }

    public function findIngredient($name){
        return Ingredient::where("name",$name)->first();
    }

}
