<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->simplePaginate(3);
        return view('welcome', ['posts' => $posts]);
    }

    /**
     * Show the application dashboard.
     *
     * @param $post_id
     * @return \Illuminate\Http\Response
     */
    public function post($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        return view('post', ['post' => $post]);
    }
}
