<?php

namespace App\Repositories\Admin;

interface AboutUsRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * Summary of update
     * @param mixed $aboutUs
     * @return void
     */
    public function update(array $request, $aboutUs);
}

