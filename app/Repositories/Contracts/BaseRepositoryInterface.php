<?php

namespace App\Repositories\Contracts;

interface BaseRepositoryInterface {

    public function findAll();

    public function findById($id);

}