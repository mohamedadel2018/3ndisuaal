<?php

namespace Database\Factories;

use App\Models\ReadSubCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReadSubCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReadSubCat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        return [
            'read_cat_id' => rand(1, 10),
            'name_ar' => 'قسم فرعى المقراة '.++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];

    }
}
