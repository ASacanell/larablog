<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\RedirectResponse;
use Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class PostController extends Controller
{
    private $postRepository;

    /**
     * Create a new controller instance.
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth');
        $this->postRepository = $postRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        if (Request::method() === 'GET') {
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
    public function edit($post_id): JsonResponse
    {
        $post = $this->postRepository->findById($post_id);

        if (Request::method() === 'GET') {
            return view('dashboard.posts.edit', ['post' => $post]);
        }

        $post->fill(Request::all());
        $post->updated_at = new \DateTime('now');

        if ($post->save()) {
            return redirect()->action(
                'HomeController@post', ['post' => $post]
            );
        }

        return new JsonResponse('Failed to save the article in database', 500);
    }

    /**
     * Show the application dashboard.
     *
     * @param $post_id
     * @return RedirectResponse
     */
    public function delete($post_id): RedirectResponse
    {
        $this->postRepository->findById($post_id)->delete();

        return redirect()->action(
            'DashboardController@posts'
        );
    }
}
