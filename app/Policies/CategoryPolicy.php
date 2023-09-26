<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;
    
    /**
     * @return bool
     */
    public function read(): bool
    {
        return auth()->user()->role() == config('role.admin.slug') || auth()->user()->role() == config('role.editor.slug');
    }

    /**
     * @return bool
     */
    public function action(): bool
    {
        return auth()->user()->role() == config('role.admin.slug') || auth()->user()->role() == config('role.editor.slug');
    }
}
