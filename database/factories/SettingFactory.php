<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meta_title_ar' => 'meta_title_ar',
            'meta_title_en' => 'meta_title_en',
            'meta_title_id' => 'meta_title_id',
            'meta_descrption_ar' => 'meta_descrption_ar',
            'meta_descrption_en' => 'meta_descrption_en',
            'meta_descrption_id' => 'meta_descrption_id',
            'video_ar' => '5yO433hdR2M',
            'video_en' => 'hq3yfQnllfQ',
            'video_id' => 'bQ_WHZ_WS3s',
            'home_cover' => 1,
            'admin_id' => 1,
        ];
    }
}
