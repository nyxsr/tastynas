<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => fake()->name(),
            'slug' => fake()->name(),
            'kategori' => fake()->name(),
            'isi' => now(),
            'user_id' => '1', // password
            'gambar' => Str::random(10),
            'is_spotlight' => false
        ];
    }

}
