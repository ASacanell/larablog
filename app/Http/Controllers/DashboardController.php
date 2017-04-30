<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;

class DashboardController extends Controller
{
    private $postRepository;

    private $userRepository;

    /**
     * Create a new controller instance.
     * @param PostRepositoryInterface $postRepository
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(PostRepositoryInterface $postRepository, UserRepositoryInterface $userRepository)
    {
        $this->middleware('auth');
        $this->postRepository = $postRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action(
            'DashboardController@statistics'
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function statistics()
    {
        return view('dashboard.statistics');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $posts = $this->postRepository->findAllPaginated(5);
        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = $this->userRepository->findAllPaginated(5);
        return view('dashboard.users.index', ['users' => $users]);
    }
}
