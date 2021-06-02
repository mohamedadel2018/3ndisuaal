<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video_ar' => '5yO433hdR2M',
            'video_en' => 'hq3yfQnllfQ',
            'video_id' => 'bQ_WHZ_WS3s',
            'is_video' => rand(0,1),
            'admin_id' => 1,
        ];
    }
}
