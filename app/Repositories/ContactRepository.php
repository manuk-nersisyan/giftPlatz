<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * Summary of index
     * @return \Illuminate\Database\Concerns\BuildsQueries|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function index()
    {
        return Contact::query()->first();
    }
}
