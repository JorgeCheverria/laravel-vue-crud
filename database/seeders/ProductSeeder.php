<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'a',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'b',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'c',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'd',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'e',
            'detail' => Str::random(10),
        ]);
    }
}

