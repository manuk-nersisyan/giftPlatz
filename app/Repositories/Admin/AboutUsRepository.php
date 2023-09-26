<?php

namespace App\Repositories\Admin;

use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Summary of update
     * @param array $request
     * @param mixed $aboutUs
     * @return mixed
     */
    public function update(array $request, $aboutUs)
    {
        if (isset($request['image'])) {
            Storage::disk('aboutUs')->delete($aboutUs->image);
            $request['image'] = fileSave($request['image'], 'aboutUs');
        }
        return $aboutUs->update([
            'image' => $request['image']?? $aboutUs->image,
            'name' => $request['name'],
            'description' => $request['description'],
        ]);
    }
}
