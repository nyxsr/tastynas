<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_produk' => fake()->name(),
            'categories_id' => 1,
            'harga' => 24000,
            'deskripsi' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, voluptatibus. ',
            'foto_produk1' => 'https://source.unsplash.com/200x200?food',
            'foto_produk2' => 'https://source.unsplash.com/200x200?food',
            'best_seller' => false
        ];
    }
}
