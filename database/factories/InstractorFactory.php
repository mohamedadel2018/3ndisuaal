<?php

namespace Database\Factories;

use App\Models\Instractor;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstractorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instractor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        $name_ar = 'أسم ';
        $name_en = $this->faker->firstName;
        $name_id = $fakerId->firstName;
        static $index = 0;
        return [
            'name_ar' => 'أسم المحاضر '.++$index,
            'name_en' => $name_en,
            'name_id' => $name_id,
            'about_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'about_en' => $this->faker->paragraph(3),
            'about_id' => $fakerId->paragraph(3),
            'admin_id' => rand(1,4),
            'meta_title_ar' => $name_ar,
            'meta_title_en' => $name_en,
            'meta_title_id' => $name_id,
            'slug_ar' => toSlug($name_ar),
            'slug_en' => toSlug($name_en),
            'slug_id' => toSlug($name_id),
            'meta_description_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'meta_description_en' => $this->faker->paragraph(3),
            'meta_description_id' => $fakerId->paragraph(3),
        ];
    }
}
