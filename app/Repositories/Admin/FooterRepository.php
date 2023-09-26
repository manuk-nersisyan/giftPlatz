<?php

namespace App\Repositories\Admin;

use App\Models\Footer;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Summary of update
     * @param array $request
     * @param mixed $footer
     * @return mixed
     */
    public function update(array $request, $footer)
    {
        if (isset($request['logo'])) {
            Storage::disk('header')->delete($footer->logo);
            $request['logo'] = fileSave($request['logo'], 'footer');
        }
        return $footer->update([
            'text' => $request['text'],
            'logo' => $request['logo']?? $footer->logo,
        ]);
    }
}
