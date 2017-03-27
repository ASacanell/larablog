<?php

namespace App\Http\Controllers;

use App\Post as Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
 */
    public function posts()
    {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->simplePaginate(5);
        return view('dashboard.posts.index', ["posts" => $posts]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = DB::table('users')->orderBy('created_at', 'desc')->simplePaginate(5);
        return view('dashboard.users.index', ["users" => $users]);
    }
}
