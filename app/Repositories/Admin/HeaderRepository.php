<?php

namespace App\Repositories\Admin;

use App\Models\Header;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Summary of update
     * @param array $request
     * @param mixed $header
     * @return mixed
     */
    public function update(array $request, $header)
    {
        if (isset($request['logo'])) {
            Storage::disk('header')->delete($header->logo);
            $request['logo'] = fileSave($request['logo'], 'header');
        }
        return $header->update([
            'text_1' => $request['text_1'],
            'text_2' => $request['text_2'],
            'logo' => $request['logo']?? $header->logo,
        ]);
    }
}
