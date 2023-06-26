<?php

namespace App\Repositories\Admin;

interface ProductRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param array $product
     * @return mixed
     */
    public function store(array $product);

    /**
     * @param array $request
     * @param $product
     * @return mixed
     */
    public function update(array $request, $product);

    /**
     * @param $product
     * @return mixed
     */
    public function delete($product);


    /**
     * @param $category
     * @return mixed
     */
    public function deleteImage($request);
}

