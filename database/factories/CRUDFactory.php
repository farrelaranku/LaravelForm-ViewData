<?php

namespace Database\Factories;

use App\Models\CRUD;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CRUD>
 */
class CRUDFactory extends Factory
{

    protected $model = CRUD::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->name(),
            'email' => strtolower(str_replace(' ', '.', $name)) . '@example.com',
            'nrp' => $this->faker->randomNumber(8, true),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
