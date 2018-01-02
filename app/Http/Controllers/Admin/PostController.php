<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\Ingredient;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostswithIngredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
//        $post = new Post();
//        $post->title = $request->title;
//        $post->description = $request->description;
//        $post->category_id = $request->category_id;
//        $path = Storage::putFile('logo_pic', $request->file('logo_pic'));
        $path = Storage::put('file', $request->file('logo_pic'), 'public');
        $contents = Storage::url($path);
        return $contents;
    }

    public function findIngredient($name){
        return Ingredient::where("name",$name)->first();
    }

}