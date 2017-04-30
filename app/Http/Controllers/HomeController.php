<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Post as Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use League\CommonMark\CommonMarkConverter;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var Collection $posts */
        $posts = $this->postRepository->findAllPaginated(3);

        foreach ($posts as $post) {
            $post->content = $this->transformMarkdownToHtml($post->content);
        }

        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the application dashboard.
     *
     * @param $post_id
     * @return \Illuminate\Http\Response
     */
    public function post($post_id)
    {
        $post = $this->postRepository->findById($post_id);
        $post->content = $this->transformMarkdownToHtml($post->content);

        return view('blog.post', ['post' => $post]);
    }

    /**
     * @param $markdown
     * @return string
     */
    private function transformMarkdownToHtml($markdown) {
        $converter = new CommonMarkConverter();
        return $converter->convertToHtml($markdown);
    }
}
