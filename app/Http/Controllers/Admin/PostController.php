<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\Ingredient;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostswithIngredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\In;
use Yish\Imgur\Facades\Upload as Imgur;

class PostController extends AdminController
{
    //
    /**
     * @return $this
     */


    public function index(){
        $posts = $this->user->posts()->get();
        return view("admin.post.list")->with("posts",$posts);
    }

    public function add(){
        return view("admin.post.edit");
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
        $post->ingredients = json_encode($ingredients);
        $this->user->posts()->save($post);
        return redirect()->route("admin.post.list")->with("message","新增成功");
    }

    public function edit($id){
        $post = Post::find($id);
        $ing = array();
        foreach (json_decode($post->ingredients) as $key => $ingredient){
            $ing[$key] = Ingredient::find($ingredient->ingredient_id)->toArray();
            $ing[$key]["amount"] = $ingredient->amount;
        }
        $post->ingredients = $ing;
        $post->steps = json_decode($post->steps);
        return view("admin.post.edit")->with("post",$post);
    }

    public function update($id,Request $request){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        if ($request->hasFile('logo_pic')) {
            $logo_pic = Imgur::upload($request->file('logo_pic'));
            $post->logo_pic = $logo_pic->link();
        }
        $_steps = json_decode($post->steps,true);

        $steps = array();
        foreach ($request->step as $key => $step){
            if(isset($request->step_pic[$key])){
                $_pic = Imgur::upload($request->step_pic[$key]);
                $pic = $_pic->link();
            }else{
                $pic = $_steps[$key]["pic"];
            }
            $arr = [
                "description" => $step,
                "pic" => $pic,
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
        $post->ingredients = json_encode($ingredients);
        $post->save();
        return redirect()->route("admin.post.list")->with("message","更新成功");
    }

    public function delete($id){
        $post = Post::find($id);
        $post ->delete();
        return redirect()->route("admin.post.list")->with("message","刪除成功");
    }
    public function findIngredient($name){
        return Ingredient::where("name",$name)->first();
    }

}
