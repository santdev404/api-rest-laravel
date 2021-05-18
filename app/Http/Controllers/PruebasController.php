<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PruebasController extends Controller
{
    //
    public function index(){

        return view('pruebas.index');

    }

    public function testOrm(){

        $posts = Post::all(); 
        foreach($posts as $post){
            echo "<h1>".$post->title."</h1>";
            echo "<pan>".$post->category->name."</pan>";
            echo "<pan>".$post->user->name."</pan>";
        }

        // $users = User::all();
        
        // foreach($users as $user){
        //     echo "<h1>".$user->name."</h1>";
            
        // }


        // $posts = Post::find(1);

        // echo $posts->title;
        die();

    }
}
