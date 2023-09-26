<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => 16,
            'name'=>'admin',
            'email' => 'armenboranyan@gmail.com',
            'password' => Hash::make('P@$$w0rdGP2023'),
            'role_id' => Role::query()->where('slug',config('role.admin.slug'))->first()->id
    ];
        User::query()->create($data);
    }
}
