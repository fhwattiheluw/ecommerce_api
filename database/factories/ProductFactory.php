<?php

namespace Database\Factories;

use App\Models\Product; // Pastikan namespace model diimpor dengan benar
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class; // Menentukan model yang terkait dengan factory ini

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Mengembalikan array dengan data palsu untuk setiap field
        return [
            'nama' => $this->faker->sentence(3), // Menghasilkan nama produk palsu dengan tiga kata
            'desc' => $this->faker->paragraph(2), // Menghasilkan deskripsi produk palsu dengan dua paragraf
            'price' => $this->faker->numberBetween(124000, 320000), // Menghasilkan harga produk acak antara 124000 dan 320000
        ];
    }
}
