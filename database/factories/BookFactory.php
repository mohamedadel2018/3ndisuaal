<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        $fakerAr = \Faker\Factory::create('ar_SA');
        $fakerId = \Faker\Factory::create('id_ID');
        $title_ar = $fakerAr->sentence;
        $title_en = $this->faker->sentence;
        $title_id = $fakerId->sentence;
        static $index = 0;
        return [
            'book_cat_id' => rand(1, 10),
            'book_sub_cat_id' => rand(1, 10),
            'instractor_id' => rand(1, 10),
            'admin_id' => rand(1, 4),
            'title_ar' => 'عنوان الكتاب '. ++$index,
            'title_en' => $title_en,
            'title_id' => $title_id,
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
            'is_featured' => rand(0,1),
            'views' => rand(1,10000),
        ];
    }
}
