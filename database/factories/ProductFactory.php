<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Mengambil ID kategori secara acak
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,

            // Nama produk
            'name' => $this->faker->words(2, true),

            // SKU produk
            'sku' => 'PRD-' . $this->faker->unique()->numberBetween(10000, 99999),

            // Harga produk
            'price' => $this->faker->numberBetween(2000, 50000),

            // Jumlah stok
            'stock' => $this->faker->numberBetween(5, 100),
        ];
    }
}