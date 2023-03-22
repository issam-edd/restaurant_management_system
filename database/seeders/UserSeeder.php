<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 6;

        $roles = [
            'owner', 'owner', 'admin', 'waiter', 'chef', 'delivery'
        ];

        for ($i=1; $i <= $count ;$i++) {
            User::create([
                'email' => 'user'.$i.'@gmail.com',
                'password' => Hash::make('password'),
                'role' => $roles[$i-1],
                'userable_type' => 'App\Models\Employee',
                'userable_id' => $i
            ]);
        }

        User::create([
            'email' => 'client@gmail.com',
            'password' => Hash::make('password'),
            'userable_type' => 'App\Models\Client',
            'userable_id' => 1
        ]);
    }
}
