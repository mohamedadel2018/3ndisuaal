<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        return [
            'title_ar' => 'عنوان الخير '.++$index,
            'title_en' => $this->faker->sentence,
            'title_id' => $this->faker->sentence,
            'admin_id' => 1,
        ];
    }
}
