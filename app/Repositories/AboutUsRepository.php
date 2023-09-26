<?php

namespace App\Repositories;

use App\Models\AboutUs;

class AboutUsRepository implements AboutUsRepositoryInterface
{
    /**
     * Summary of index
     * @return \Illuminate\Database\Concerns\BuildsQueries|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function index()
    {
        return AboutUs::query()->first();
    }
}
