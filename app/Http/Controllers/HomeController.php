<?php

namespace App\Http\Controllers;

use App\category;
use App\Colletion;
use App\Ingredient;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::check()){
                $this->user= Auth::user();
            }
            $cates = Category::all();
            View::share('cates', $cates);
            return $next($request);
        });
    }

    public function index()
    {
        $rndPosts = Post::inRandomOrder()->limit(8)->get();
        $lastPosts = Post::orderBy('created_at', 'desc')->limit(6)->get();
        return view('frontend.index')->with("rndPosts",$rndPosts)->with("lastPosts",$lastPosts);
    }

    public function cate($id)
    {
        $cate = Category::find($id);
        $posts = $cate->posts()->get();
        foreach ($posts as $post){
            foreach (json_decode($post->ingredients) as $key => $ingredient){
                $arr[] = Ingredient::find($ingredient->ingredient_id);
            }
            $post->ing = $arr;
        }
        return view('frontend.list')->with("posts",$posts);
    }

    public function post($id)
    {
        $post = Post::find($id);
        $steps = json_decode($post->steps);
        $ing = array();
        $sum = 0;
        foreach (json_decode($post->ingredients) as $key => $ingredient){
            $ing[$key] = Ingredient::find($ingredient->ingredient_id);
            $ing[$key]["amount"] = $ingredient->amount;
            $sum += $ing[$key]["amount"] * $ing[$key]["heat"];
        }
        $post->ingredients = $ing;

        $status = false;
        if(Auth::check()){
            $col = Colletion::where("user_id",Auth::user()->id)->where("post_id",$post->id)->count();
            if($col>0){
                $status = true;
            }
        }


        return view('frontend.post')->with("post",$post)->with("steps",$steps)->with("sum",$sum)->with("like",$status);
    }

    public function like($id)
    {
        if(Auth::check()){
            $post = Post::find($id);
            $col = Colletion::where("user_id",Auth::user()->id)->where("post_id",$post->id)->count();
            if($col>0){
                $col = Colletion::where("user_id",Auth::user()->id)->where("post_id",$post->id)->first();
                $col->delete();
            }else{
                $col = new Colletion();
                $col->post_id = $post->id;
                $col->user_id= Auth::user()->id;
                $col->save();
            }

            return  Redirect::back()->with('message', '加入成功');
        }else{
            return  Redirect::back()->with('message', '您還未登入');
        }
    }

    public function likelist()
    {
        if(Auth::check()){
           $cols = Auth::user()->collections()->get();
           $posts = array();
           foreach ($cols as $col){
               $posts[] = Post::find($col->post_id);
           }
            foreach ($posts as $post){
                foreach (json_decode($post->ingredients) as $key => $ingredient){
                    $arr[] = Ingredient::find($ingredient->ingredient_id);
                }
                $post->ing = $arr;
            }

        }
        return view('frontend.list')->with("posts",$posts);
    }

    public function search($key)
    {
        $posts = Post::where('title','LIKE', "%{$key}%")->get();
        foreach ($posts as $post){
            foreach (json_decode($post->ingredients) as $key => $ingredient){
                $arr[] = Ingredient::find($ingredient->ingredient_id);
            }
            $post->ing = $arr;
        }
        return view('frontend.list')->with("posts",$posts);
    }
}
