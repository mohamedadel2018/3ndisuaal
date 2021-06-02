<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        $title_ar = $fakerAr->sentence;
        $title_en = $this->faker->sentence;
        $title_id = $fakerId->sentence;
        static $index = 0;
        return [
            'playlist_id' => rand(1,10),
            'admin_id' => rand(1,4),
            'title_ar' => 'عنوان البرنامج '.++$index,
            'title_en' => $title_en,
            'title_id' => $title_id,
            // 'video_ar' => '5yO433hdR2M',
            'video_ar' => Arr::random(['iG_8khipqTE', 'RK_DjVTjl_A', 'DSO_378j50w']),
            'video_en' => 'hq3yfQnllfQ',
            'video_id' => 'bQ_WHZ_WS3s',
            'sound_ar' => 'https://www.google.com',
            'sound_en' => 'https://www.google.com',
            'sound_id' => 'https://www.google.com',
            'about_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'about_en' => $this->faker->paragraph(3),
            'about_id' => $fakerId->paragraph(3),
            'meta_title_ar' => $title_ar,
            'meta_title_en' => $title_en,
            'meta_title_id' => $title_id,
            'slug_ar' => toSlug($title_ar),
            'slug_en' => toSlug($title_en),
            'slug_id' => toSlug($title_id),
            'meta_description_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'meta_description_en' => $this->faker->paragraph(3),
            'meta_description_id' => $fakerId->paragraph(3),
            'views' => rand(1000,10000),
        ];
    }
}
