<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product; // Mengimpor model Product untuk digunakan dalam relasi
use App\Models\Review; // Mengimpor model Review untuk factory

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class; // Menentukan model yang terkait dengan factory ini

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Mengembalikan array dengan data palsu untuk setiap field
        return [
            'product_id' => function() {
                // Mengambil ID produk acak dari database untuk relasi
                return Product::all()->random()->id;
            },
            'customer' => $this->faker->name(), // Menggunakan faker untuk menghasilkan nama pelanggan palsu
            'review' => $this->faker->paragraph(2), // Menggunakan faker untuk menghasilkan review produk palsu dengan dua paragraf
            'star' => $this->faker->numberBetween(1, 5) // Menggunakan faker untuk menghasilkan rating bintang acak antara 1 dan 5
        ];
    }
}
