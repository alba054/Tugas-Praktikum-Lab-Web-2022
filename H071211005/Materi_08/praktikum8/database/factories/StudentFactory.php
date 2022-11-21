<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' -> fake()->name(),
            'nim' -> fake()->phoneNumber(),
            'alamat' -> fake()->addres(),
            'fakultas' -> fake()->company(),
        ];
    }
}
