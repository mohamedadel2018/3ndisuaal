<?php

namespace Database\Factories;

use App\Models\Read;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Read::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        return [
            'read_cat_id' => rand(1, 10),
            'read_sub_cat_id' => rand(1, 10),
            'country_id' => rand(1, 10),
            'level_id' => rand(1, 10),
            'program_id' => rand(1, 10),
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'id_number' => rand(1000000,40000000),
            'type' => rand(1, 2),
            'good_time' => $this->faker->sentence,
            'is_archived' => rand(1, 2),
        ];
    }
}
