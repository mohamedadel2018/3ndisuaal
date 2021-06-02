<?php

namespace Database\Factories;

use App\Models\Playlist;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaylistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Playlist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        return [
            'program_cat_id' => rand(1, 10),
            'program_sub_cat_id' => rand(1, 10),
            'instractor_id' => rand(1, 10),
            'video_ar' => '5yO433hdR2M',
            'video_en' => 'hq3yfQnllfQ',
            'video_id' => 'bQ_WHZ_WS3s',
            'name_ar' => 'قائمة تشغيل البرنامج '.++$index,
            'name_en' => 'name en title',
            'name_id' => 'name id title',
            'meta_description_ar' => 'this is meta_description_ar',
            'meta_description_en' => 'this is meta_description_en',
            'meta_description_id' => 'this is meta_description_id',
            'is_featured' => rand(0,1),
            'admin_id' => 1,
        ];
    }
}
