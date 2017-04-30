<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\PostRepository;
use Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use League\CommonMark\CommonMarkConverter;

class PostController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        if (Request::method() === "GET") {
            return view('dashboard.posts.create');
        }

        $input = Request::all();
        $post = Post::create($input);

        return redirect()->action(
            'HomeController@post', ['post' => $post]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @param $post_id
     * @return JsonResponse
     */
    public function edit($post_id)
    {
//        $post = Post::find($post_id);
        $asdf = new PostRepository();
        $post = $asdf->findById($post_id);

        if (Request::method() === "GET") {
            return view('dashboard.posts.edit', ["post" => $post]);
        }

        $post->fill(Request::all());
        $post->updated_at = new \DateTime('now');

        if ($post->save()) {
            return redirect()->action(
                'HomeController@post', ['post' => $post]
            );
        }

        return new JsonResponse("Failed to save the article in database", 500);
    }

    /**
     * Show the application dashboard.
     *
     * @param $post_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($post_id)
    {
        Post::find($post_id)->delete();
        return redirect()->action(
            'DashboardController@posts'
        );
    }
}
