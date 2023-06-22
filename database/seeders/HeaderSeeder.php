<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::query()->create([
            'text_1' => 'ШОКОЛАД',
            'text_2' => 'и не только...',
        ]);
    }
}
