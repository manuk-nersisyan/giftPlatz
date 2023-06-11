<?php

namespace App\Repositories\Admin;

interface subcategoryRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param array $subcategory
     * @return mixed
     */
    public function store(array $subsubcategory);

    /**
     * @param array $request
     * @param $subcategory
     * @return mixed
     */
    public function update(array $request, $subcategory);

    /**
     * @param $subcategory
     * @return mixed
     */
    public function delete($subcategory);
}

