<?php

namespace App\Repositories\Admin;

interface FooterRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * Summary of update
     * @param mixed $header
     * @return void
     */
    public function update(array $request, $header);
}

