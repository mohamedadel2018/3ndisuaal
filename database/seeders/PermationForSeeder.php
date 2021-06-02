<?php

namespace Database\Seeders;

use App\Models\PermationFor;
use Illuminate\Database\Seeder;

class PermationForSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        PermationFor::create([
            'name_ar' => 'الأعدادات',
            'name_en' => 'Settings',
            'name_id' => 'Settings',
        ]);
        // 2
        PermationFor::create([
            'name_ar' => 'الأسلايدر',
            'name_en' => 'Sliders',
            'name_id' => 'Sliders',
        ]);
        // 3
        PermationFor::create([
            'name_ar' => 'عن المنصة',
            'name_en' => 'About',
            'name_id' => 'About',
        ]);
        // 4
        PermationFor::create([
            'name_ar' => 'إتصل بنا',
            'name_en' => 'Contact Us',
            'name_id' => 'Contact Us',
        ]);
        // 5
        PermationFor::create([
            'name_ar' => 'المحاضرين',
            'name_en' => 'instractors',
            'name_id' => 'instractors',
        ]);
        // 6
        PermationFor::create([
            'name_ar' => 'مواقع التواصل',
            'name_en' => 'Social Media',
            'name_id' => 'Social Media',
        ]);
        // 7
        PermationFor::create([
            'name_ar' => 'الأخبار',
            'name_en' => 'News',
            'name_id' => 'News',
        ]);
        // 8
        PermationFor::create([
            'name_ar' => 'البلاد',
            'name_en' => 'Countries',
            'name_id' => 'Countries',
        ]);
        // 9
        PermationFor::create([
            'name_ar' => 'المستويات',
            'name_en' => 'Levels',
            'name_id' => 'Levels',
        ]);
        // 10
        PermationFor::create([
            'name_ar' => 'مشاركة المحتوى',
            'name_en' => 'Contribute',
            'name_id' => 'Contribute',
        ]);
        // 11
        PermationFor::create([
            'name_ar' => 'المكتبة',
            'name_en' => 'Books',
            'name_id' => 'Books',
        ]);
        // 12
        PermationFor::create([
            'name_ar' => 'المكتبة ( الأقسام الرئيسية )',
            'name_en' => 'Book Categories',
            'name_id' => 'Book Categories',
        ]);
        // 13
        PermationFor::create([
            'name_ar' => 'المكتبة ( الأقسام الفرعية )',
            'name_en' => 'Book Sub Categories',
            'name_id' => 'Book Sub Categories',
        ]);
        // 14
        PermationFor::create([
            'name_ar' => 'قوائم التشغيل',
            'name_en' => 'Playlists',
            'name_id' => 'Playlists',
        ]);
        // 15
        PermationFor::create([
            'name_ar' => 'البرامج',
            'name_en' => 'Programs',
            'name_id' => 'Programs',
        ]);
        // 16
        PermationFor::create([
            'name_ar' => 'البرامج ( الأقسام الرئيسية )',
            'name_en' => 'Program Categories',
            'name_id' => 'Program Categories',
        ]);
        // 17
        PermationFor::create([
            'name_ar' => 'البرامج ( الأقسام الفرعية )',
            'name_en' => 'Program Sub Categories',
            'name_id' => 'Program Sub Categories',
        ]);
        // 18
        PermationFor::create([
            'name_ar' => 'الموسوعة ( الأسئلة )',
            'name_en' => 'Encyclopedia ( Questions )',
            'name_id' => 'Encyclopedia ( Questions )',
        ]);
        // 19
        PermationFor::create([
            'name_ar' => 'الموسوعة',
            'name_en' => 'Encyclopedia',
            'name_id' => 'Encyclopedia',
        ]);
        // 20
        PermationFor::create([
            'name_ar' => 'الموسوعة ( الأقسام الرئيسية )',
            'name_en' => 'Encyclopedia Categories',
            'name_id' => 'Encyclopedia Categories',
        ]);
        // 21
        PermationFor::create([
            'name_ar' => 'الموسوعة ( الأقسام الفرعية )',
            'name_en' => 'Encyclopedia Sub Categories',
            'name_id' => 'Encyclopedia Sub Categories',
        ]);
        // 22
        PermationFor::create([
            'name_ar' => 'المقرأة',
            'name_en' => 'Reads',
            'name_id' => 'Reads',
        ]);
        // 23
        PermationFor::create([
            'name_ar' => 'المقرأة ( الأقسام الرئيسية )',
            'name_en' => 'Read Categories',
            'name_id' => 'Read Categories',
        ]);
        // 24
        PermationFor::create([
            'name_ar' => 'المقرأة ( الأقسام الفرعية )',
            'name_en' => 'Read Sub Categories',
            'name_id' => 'Read Sub Categories',
        ]);
    }
}
