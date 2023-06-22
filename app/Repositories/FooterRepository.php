<?php

namespace App\Repositories;

use App\Models\Footer;

class FooterRepository implements FooterRepositoryInterface
{
    /**
     * Summary of index
     * @return \Illuminate\Database\Concerns\BuildsQueries|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function index()
    {
        return Footer::query()->first();
    }
}
