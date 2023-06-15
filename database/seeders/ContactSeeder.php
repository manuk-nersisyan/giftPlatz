<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::query()->create([
            'address' => 'г.Москва, ул. Краснобогатырская д2.стр2',
            'phone_number' => '+7(495) 728-66-50 ',
            'email' => 'zakaz@giftplatz.ru',
            'lat' => '55.7558',
            'long' => ' 37.6173',
        ]);
    }
}
