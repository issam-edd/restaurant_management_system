<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name'   => 'Amine Bendriouch',
            'address'   => 'Address 1',
            'phone'   => '0655442233'
        ]);
    }
}
