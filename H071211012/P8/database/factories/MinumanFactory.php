<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\minuman>
 */
class MinumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_minuman' => $this->faker->unique()->name(2),
            'jenis_minuman' => Arr::random(['Coffee', 'Non Coffee']),
            'deskripsi' => $this->faker->sentences(1, true),
            'harga' => $this->faker->randomNumber(5, true)
        ];
    }
}
