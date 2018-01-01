<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\Ingredient;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostswithIngredients;

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


}
