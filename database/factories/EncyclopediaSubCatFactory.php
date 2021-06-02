<?php

namespace Database\Factories;

use App\Models\EncyclopediaSubCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class EncyclopediaSubCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EncyclopediaSubCat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        static $index = 0;
        return [
            'encyclopedia_cat_id' => rand(1, 10),
            'name_ar' => 'الموسوعة قسم فرعى '.++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
