<?php

namespace App\Repositories\Admin;

interface CategoryRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param array $category
     * @return mixed
     */
    public function store(array $category);

    /**
     * @param array $request
     * @param $category
     * @return mixed
     */
    public function update(array $request, $category);

    /**
     * @param $category
     * @return mixed
     */
    public function delete($category);
}

