<?php

namespace App\Repositories\Admin;

interface ContactRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * Summary of update
     * @param mixed $request
     * @param mixed $contact
     * @return void
     */
    public function update(array $request, $contact);

}

