<?php

namespace Database\Factories;

use App\Models\ReadCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReadCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReadCat::class;

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
            'name_ar' => 'قسم رئيسى المقراة '.++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
