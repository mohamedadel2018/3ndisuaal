<?php

namespace Database\Factories;

use App\Models\BookSubCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookSubCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookSubCat::class;

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
            'book_cat_id' => rand(1, 10),
            'name_ar' => 'المكتبة قسم فرعى ' . ++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
