<?php

namespace App\Repositories;

interface EditorRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param array $editor
     * @return mixed
     */
    public function store(array $editor);

    /**
     * @param array $request
     * @param $editor
     * @return mixed
     */
    public function update(array $request, $editor);

    /**
     * @param $editor
     * @return mixed
     */
    public function delete($editor);
}

