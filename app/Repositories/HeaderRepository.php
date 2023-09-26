<?php

namespace App\Repositories;

use App\Models\Header;

class HeaderRepository implements HeaderRepositoryInterface
{
    /**
     * Summary of index
     * @return \Illuminate\Database\Concerns\BuildsQueries|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function index()
    {
        return Header::query()->first();

    }
}
