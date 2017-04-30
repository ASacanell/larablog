<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    public function findAll()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::find($id);
    }

    public function findAllPaginated($amount)
    {
        return User::orderBy('created_at', 'desc')->simplePaginate($amount);
    }
}