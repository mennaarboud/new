<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'name' => 'Nile Dolphin Residence and Hotel Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/apart-1.jpg',
            'price' => '7,950,000 ',
            'type_id' => 1,
        ]);
        DB::table('properties')->insert([
            'name' => 'Bait El Watan Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/apart-2.jpg',
            'price' => '1,890,000 ',
            'type_id' => 1,
        ]);
        DB::table('properties')->insert([
            'name' => 'Paradise Gardens Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/apart-3.jpg',
            'price' => '1,200,000 ',
            'type_id' => 1,
        ]);
        DB::table('properties')->insert([
            'name' => 'Madinaty Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/apart-4.jpg',
            'price' => '1,900,000 ',
            'type_id' => 1,
        ]);
        DB::table('properties')->insert([
            'name' => 'Nile Dolphin Residence and Hotel Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/property-2.jpg',
            'price' => '7,950,000 ',
            'type_id' => 2,
        ]);
        DB::table('properties')->insert([
            'name' => 'Bait El Watan Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/property-4.jpg',
            'price' => '1,890,000 ',
            'type_id' => 2,
        ]);
        DB::table('properties')->insert([
            'name' => 'Paradise Gardens Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => '/images/property-5.jpg',
            'price' => '1,200,000 ',
            'type_id' => 2,
        ]);
        DB::table('properties')->insert([
            'name' => 'Madinaty Apartments',
            'location' => 'Cairo, Egypt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            'image' => 'images/property-11.jpg',
            'price' => '1,900,000 ',
            'type_id' => 2,
        ]);
    }
}
