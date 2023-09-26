<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FooterPolicy
{
    use HandlesAuthorization;

    /**
     * @return bool
     */
    public function read(): bool
    {
        return auth()->user()->role() == config('role.admin.slug');
    }

    /**
     * @return bool
     */
    public function action(): bool
    {
        return auth()->user()->role() == config('role.admin.slug');
    }
}
