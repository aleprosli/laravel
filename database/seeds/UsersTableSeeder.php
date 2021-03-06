<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
         [   'name' => 'Admin Admin',
            'email' => 'admin@argon.com',
            'ic' => '123456',
            'gender' => 'Male',
            'mnum' => '999',
            'address' => 'Seri kembangan',
            'bank' => 'maybank',
            'bankacc' => '123',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'test',
            'email' => 'test@argon.com',
            'ic' => '1234563',
            'gender' => 'Male',
            'mnum' => '999321',
            'address' => 'Seri kembangan',
            'bank' => 'maybank',
            'bankacc' => '12312',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);
    }
}
