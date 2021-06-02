<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'about_ar' => $this->faker->sentence(3),
            'about_en' => $this->faker->sentence(3),
            'about_id' => $this->faker->sentence(3),
            'our_vision_ar' => $this->faker->sentence(3),
            'our_vision_en' => $this->faker->sentence(3),
            'our_vision_id' => $this->faker->sentence(3),
            'our_goals_ar' => $this->faker->sentence(3),
            'our_goals_en' => $this->faker->sentence(3),
            'our_goals_id' => $this->faker->sentence(3),
            'meta_title_ar' => 'about_meta_title_ar',
            'meta_title_en' => 'about_meta_title_en',
            'meta_title_id' => 'about_meta_title_id',
            'meta_descrption_ar' => 'about_meta_descrption_ar',
            'meta_descrption_en' => 'about_meta_descrption_en',
            'meta_descrption_id' => 'about_meta_descrption_id',
            'admin_id' => 1,
        ];
    }
}
