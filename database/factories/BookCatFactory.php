<?php

namespace Database\Factories;

use App\Models\BookCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookCat::class;

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
            'name_ar' => 'المكتبة قسم رئيسى '.++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
