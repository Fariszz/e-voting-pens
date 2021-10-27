<?php

namespace Database\Factories;

use App\Models\Pemilih;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PemilihFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pemilih::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->numerify('##########'),
            'password' => $this->faker->password(8),
            'status' => $this->faker->randomElement([1, 2])
        ];
    }
}
