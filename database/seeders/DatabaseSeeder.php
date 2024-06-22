<?php

namespace Database\Seeders;

// Uncomment the following line if you need to disable model events during seeding
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Product; // Mengimpor model Product
use App\Models\Review; // Mengimpor model Review
use App\Models\User; // Mengimpor model User (meskipun tidak digunakan dalam contoh ini)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil factory untuk membuat 10 data Product
        Product::factory()->count(10)->create();

        // Memanggil factory untuk membuat 100 data Review
        Review::factory()->count(100)->create();

        // Jika Anda ingin menambahkan seeder lainnya, Anda bisa melakukannya di sini.
        // Contoh:
        // User::factory()->count(50)->create();
    }
}
