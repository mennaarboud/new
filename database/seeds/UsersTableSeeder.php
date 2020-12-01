<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'menna',
            'email' => 'menna@yahoo.com',
            'password' => Hash::make('12345678'),
            'contact' => '0100'.Str::random(7),
            'address' => 'Egypt',
            'admtype_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'mazen',
            'email' => 'mazen@yahoo.com',
            'password' => Hash::make('12345678'),
            'contact' => '0100'.Str::random(7),
            'address' => 'Egypt',
            'admtype_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'ali',
            'email' => 'ali@yahoo.com',
            'password' => Hash::make('12345678'),
            'contact' => '0100'.Str::random(7),
            'address' => 'Egypt',
            'admtype_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'omar',
            'email' => 'omar@yahoo.com',
            'password' => Hash::make('12345678'),
            'contact' => '0100'.Str::random(7),
            'address' => 'Egypt',
            'admtype_id' => 2,
        ]);
    }
}
