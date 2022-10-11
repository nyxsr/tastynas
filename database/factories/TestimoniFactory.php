<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_reviewer' => fake()->name(),
            'foto_reviewer' => 'https://source.unsplash.com/200x200?people',
            'isi_review' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, ipsam.',
        ];
    }
}
