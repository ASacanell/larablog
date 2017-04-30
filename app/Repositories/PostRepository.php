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

    public function findAllPaginated($amount)
    {
        return Post::orderBy('created_at', 'desc')->simplePaginate($amount);
    }
}