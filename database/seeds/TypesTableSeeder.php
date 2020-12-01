<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Apartments',
            'admin_id' => 1,
        ]);
        DB::table('types')->insert([
            'name' => 'Furnished Apartments',
            'admin_id' => 1,
        ]);
        DB::table('types')->insert([
            'name' => 'Chalets',
            'admin_id' => 1,
        ]);
        DB::table('types')->insert([
            'name' => 'Villas',
            'admin_id' => 2,
        ]);
        DB::table('types')->insert([
            'name' => 'Buildings',
            'admin_id' => 2,
        ]);
        DB::table('types')->insert([
            'name' => 'Other',
            'admin_id' => 2,
        ]);
    }
}
