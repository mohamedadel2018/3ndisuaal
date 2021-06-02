<?php

namespace Database\Factories;

use App\Models\EncyclopediaCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class EncyclopediaCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EncyclopediaCat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        static $index;
        return [
            'name_ar' => 'قسم رئيسى الموسوعة '.++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
