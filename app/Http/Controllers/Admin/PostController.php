<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\Ingredient;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostswithIngredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yish\Imgur\Facades\Upload as Imgur;

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
        $post =  new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        if ($request->hasFile('logo_pic')) {
            $logo_pic = Imgur::upload($request->file('logo_pic'));
            $post->logo_pic = $logo_pic->link();
        }
        $steps = array();
        foreach ($request->step as $key => $step){
            $logo_pic = Imgur::upload($request->step_pic[$key]);
            $arr = [
                "description" => $step,
                "pic" => $logo_pic->link(),
            ];
            array_push($steps,$arr);
        }
        $post->steps = json_encode($steps);

        $ingredients = array();
        foreach ($request->ingredient as $key => $ingredient){
            $arr = [
                "ingredient_id" => $this->findIngredient($ingredient)->id,
                "amount" => $request->amount[$key],
            ];
            array_push($ingredients,$arr);
        }
        $post->ingredients = json_encode(ingredients);
        $this->user->posts()->save($post);
//        dd($request->all());
    }

    public function findIngredient($name){
        return Ingredient::where("name",$name)->first();
    }

}
