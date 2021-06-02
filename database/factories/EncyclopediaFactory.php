<?php

namespace Database\Factories;

use App\Models\Encyclopedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class EncyclopediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Encyclopedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        $name_ar = $fakerAr->firstName;
        $name_en = $this->faker->firstName;
        $name_id = $fakerId->firstName;
        static $index = 0;
        return [
            'encyclopedia_cat_id' => rand(1, 10),
            'encyclopedia_sub_cat_id' => rand(1, 10),
            'question_ar' => 'عنوان السؤال '.++$index,
            'question_en' => $name_en,
            'question_id' => $name_id,
            'answer_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص ',
            'answer_en' => $this->faker->paragraph(5),
            'answer_id' => $fakerId->paragraph(5),
            'slug_ar' => toSLug('عنوان السؤال'),
            'slug_en' => toSLug($name_en),
            'slug_id' => toSLug($name_id),
            'meta_title_ar' =>  $name_ar,
            'meta_title_en' =>  $name_en,
            'meta_title_id' => $name_id ,
            'meta_description_ar' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'meta_description_en' => $this->faker->paragraph(3),
            'meta_description_id' => $fakerId->paragraph(3),
        ];
    }
}
