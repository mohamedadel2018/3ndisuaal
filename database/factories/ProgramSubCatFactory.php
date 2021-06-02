<?php

namespace Database\Factories;

use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramSubCatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProgramSubCat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        static $index = 1;
        return [
            'program_cat_id' => ProgramCat::inRandomOrder()->first()->id,
            'name_ar' => 'قسم برامج فرعى ' . ++$index,
            'name_en' => $this->faker->firstName,
            'name_id' => $fakerId->firstName,
            'admin_id' => 1,
        ];
    }
}
