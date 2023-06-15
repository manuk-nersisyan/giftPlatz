<?php

namespace App\Repositories\Admin;

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

    /**
     * Summary of update
     * @param array $request
     * @param mixed $category
     * @return mixed
     */
    public function update(array $request, $category)
    {
        return $category->update([
            'address' => $request['address'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'lat' => $request['lat'],
            'long' => $request['long'],
        ]);
    }
}
