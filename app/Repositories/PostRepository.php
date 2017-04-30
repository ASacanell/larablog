<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function findAll()
    {
        return Post::all();
    }

    public function findById($id)
    {
        return Post::find($id);
    }
}