<?php

namespace Database\Factories;

use App\Models\Contribute;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->sentence,
            'text' => $this->faker->paragraph(3),
        ];
    }
}
