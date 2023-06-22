<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    public function getProductsByCategoryId($categoryId);

}

