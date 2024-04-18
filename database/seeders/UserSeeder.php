<?php

namespace Database\Seeders;
Use App\Models\User;
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
            'name' => 'Carlitos',
            'phone' => '917865342',
            'email' => 'carl98@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')

        ]);
        User::create([
            'name' => 'Sara Gomez',
            'phone' => '917534532',
            'email' => 'saracol@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')

        ]);
    }
}
