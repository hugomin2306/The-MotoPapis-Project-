<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sergio',
            'username' => 'SergioB',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('12345678')

        ])->assignRole('Admin');

        User::create([
            'name' => 'Ivan',
            'username' => 'IvanF',
            'email' => 'Ivan@gmail.com',
            'password' => bcrypt('12345678')

        ])->assignRole('Jugador');

         User::create([
            'name' => 'Hugo',
            'username' => 'HugoM',
            'email' => 'Hugo@gmail.com',
            'password' => bcrypt('12345678')

        ])->assignRole('Editor');

        User::factory(9)->create();
    }
}
