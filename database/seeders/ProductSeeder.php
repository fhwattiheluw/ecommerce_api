<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
      for ($i=0; $i < 10; $i++) {
        DB::table('products')->insert([
            'nama' => Str::random(10),
            'desc' => Str::random(10),
            'price' => 5000,
            'created_at' => now(),
        ]);
      }

    }
}
