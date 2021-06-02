<?php

namespace Database\Seeders;

use App\Models\Permation;
use Illuminate\Database\Seeder;

class PermationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Permation::create([
            'name' => 'setting.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 1,
        ]);
        Permation::create([
            'name' => 'setting.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 1,
        ]);
        Permation::create([
            'name' => 'setting.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 1,
        ]);
        Permation::create([
            'name' => 'setting.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 1,
        ]);
        // 2
        Permation::create([
            'name' => 'slider.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 2,
        ]);
        Permation::create([
            'name' => 'slider.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 2,
        ]);
        Permation::create([
            'name' => 'slider.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 2,
        ]);
        Permation::create([
            'name' => 'slider.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 2,
        ]);
        // 3
        Permation::create([
            'name' => 'about.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 3,
        ]);
        Permation::create([
            'name' => 'about.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 3,
        ]);
        Permation::create([
            'name' => 'about.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 3,
        ]);
        Permation::create([
            'name' => 'about.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 3,
        ]);
        // 4
        Permation::create([
            'name' => 'contact.info.view',
            'label_en' => 'View Info',
            'label_id' => 'View Info',
            'label_ar' => 'عرض المعلومات',
            'permation_for_id' => 4,
        ]);
        Permation::create([
            'name' => 'contact.info.create',
            'label_en' => 'Create Info',
            'label_id' => 'Create Info',
            'label_ar' => 'إنشاء المعلومات',
            'permation_for_id' => 4,
        ]);
        Permation::create([
            'name' => 'contact.info.edit',
            'label_en' => 'Edit Info',
            'label_id' => 'Edit Info',
            'label_ar' => 'تعديل المعلومات',
            'permation_for_id' => 4,
        ]);
        Permation::create([
            'name' => 'contact.info.delete',
            'label_en' => 'Delete Info',
            'label_id' => 'Delete Info',
            'label_ar' => 'حذف المعلومات',
            'permation_for_id' => 4,
        ]);
        // ( 5 )4 SAME PERMATION FOR TITLE
        Permation::create([
            'name' => 'contact.view',
            'label_en' => 'View Message',
            'label_id' => 'View Message',
            'label_ar' => 'عرض الرسائل',
            'permation_for_id' => 4,
        ]);
        Permation::create([
            'name' => 'contact.delete',
            'label_en' => 'Delete Message',
            'label_id' => 'Delete Message',
            'label_ar' => 'حذف الرسائل',
            'permation_for_id' => 4,
        ]);
        // 5
        Permation::create([
            'name' => 'instractor.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 5,
        ]);
        Permation::create([
            'name' => 'instractor.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 5,
        ]);
        Permation::create([
            'name' => 'instractor.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 5,
        ]);
        Permation::create([
            'name' => 'instractor.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 5,
        ]);
        // 6
        Permation::create([
            'name' => 'social.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 6,
        ]);
        Permation::create([
            'name' => 'social.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 6,
        ]);
        Permation::create([
            'name' => 'social.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 6,
        ]);
        Permation::create([
            'name' => 'social.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 6,
        ]);
        // 7
        Permation::create([
            'name' => 'new.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 7,
        ]);
        Permation::create([
            'name' => 'new.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 7,
        ]);
        Permation::create([
            'name' => 'new.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 7,
        ]);
        Permation::create([
            'name' => 'new.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 7,
        ]);
        // 8
        Permation::create([
            'name' => 'country.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 8,
        ]);
        Permation::create([
            'name' => 'country.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 8,
        ]);
        Permation::create([
            'name' => 'country.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 8,
        ]);
        Permation::create([
            'name' => 'country.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 8,
        ]);
        // 9
        Permation::create([
            'name' => 'level.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 9,
        ]);
        Permation::create([
            'name' => 'level.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 9,
        ]);
        Permation::create([
            'name' => 'level.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 9,
        ]);
        Permation::create([
            'name' => 'level.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 9,
        ]);
        // 10
        Permation::create([
            'name' => 'contribute.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 10,
        ]);
        Permation::create([
            'name' => 'contribute.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 10,
        ]);
        // 11
        Permation::create([
            'name' => 'book.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 11,
        ]);
        Permation::create([
            'name' => 'book.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 11,
        ]);
        Permation::create([
            'name' => 'book.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 11,
        ]);
        Permation::create([
            'name' => 'book.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 11,
        ]);
        Permation::create([
            'name' => 'book.feature',
            'label_en' => 'Feature',
            'label_id' => 'Feature',
            'label_ar' => 'تمييز الكتاب',
            'permation_for_id' => 11,
        ]);

        // 12
        Permation::create([
            'name' => 'book.cat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 12,
        ]);
        Permation::create([
            'name' => 'book.cat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 12,
        ]);
        Permation::create([
            'name' => 'book.cat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 12,
        ]);
        Permation::create([
            'name' => 'book.cat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 12,
        ]);
        // 13
        Permation::create([
            'name' => 'book.subcat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 13,
        ]);
        Permation::create([
            'name' => 'book.subcat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 13,
        ]);
        Permation::create([
            'name' => 'book.subcat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 13,
        ]);
        Permation::create([
            'name' => 'book.subcat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 13,
        ]);
        // 14
        Permation::create([
            'name' => 'playlist.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 14,
        ]);
        Permation::create([
            'name' => 'playlist.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 14,
        ]);
        Permation::create([
            'name' => 'playlist.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 14,
        ]);
        Permation::create([
            'name' => 'playlist.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 14,
        ]);
        Permation::create([
            'name' => 'playlist.feature',
            'label_en' => 'Feature',
            'label_id' => 'Feature',
            'label_ar' => 'تمييز',
            'permation_for_id' => 14,
        ]);
        // 15
        Permation::create([
            'name' => 'program.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 15,
        ]);
        Permation::create([
            'name' => 'program.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 15,
        ]);
        Permation::create([
            'name' => 'program.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 15,
        ]);
        Permation::create([
            'name' => 'program.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 15,
        ]);
        // 16
        Permation::create([
            'name' => 'program.cat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 16,
        ]);
        Permation::create([
            'name' => 'program.cat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 16,
        ]);
        Permation::create([
            'name' => 'program.cat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 16,
        ]);
        Permation::create([
            'name' => 'program.cat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 16,
        ]);
        // 17
        Permation::create([
            'name' => 'program.subcat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 17,
        ]);
        Permation::create([
            'name' => 'program.subcat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 17,
        ]);
        Permation::create([
            'name' => 'program.subcat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 17,
        ]);
        Permation::create([
            'name' => 'program.subcat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 17,
        ]);
        // 18
        Permation::create([
            'name' => 'question.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 18,
        ]);
        Permation::create([
            'name' => 'question.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 18,
        ]);
        Permation::create([
            'name' => 'question.answer',
            'label_en' => 'Answer',
            'label_id' => 'Answer',
            'label_ar' => 'الإجابة على الأسئلة',
            'permation_for_id' => 18,
        ]);

        // 19
        Permation::create([
            'name' => 'encyclopedia.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 19,
        ]);
        Permation::create([
            'name' => 'encyclopedia.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 19,
        ]);
        Permation::create([
            'name' => 'encyclopedia.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 19,
        ]);
        Permation::create([
            'name' => 'encyclopedia.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 19,
        ]);
        // 20
        Permation::create([
            'name' => 'encyclopedia.cat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 20,
        ]);
        Permation::create([
            'name' => 'encyclopedia.cat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 20,
        ]);
        Permation::create([
            'name' => 'encyclopedia.cat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 20,
        ]);
        Permation::create([
            'name' => 'encyclopedia.cat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 20,
        ]);
        // 21
        Permation::create([
            'name' => 'encyclopedia.subcat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 21,
        ]);
        Permation::create([
            'name' => 'encyclopedia.subcat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 21,
        ]);
        Permation::create([
            'name' => 'encyclopedia.subcat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 21,
        ]);
        Permation::create([
            'name' => 'encyclopedia.subcat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 21,
        ]);
        // 22
        Permation::create([
            'name' => 'read.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 22,
        ]);
        Permation::create([
            'name' => 'read.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 22,
        ]);
        Permation::create([
            'name' => 'read.archive',
            'label_en' => 'Move To Archive',
            'label_id' => 'Move To Archive',
            'label_ar' => 'نقل إلى الأرشيف',
            'permation_for_id' => 22,
        ]);
        // 23
        Permation::create([
            'name' => 'read.cat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 23,
        ]);
        Permation::create([
            'name' => 'read.cat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 23,
        ]);
        Permation::create([
            'name' => 'read.cat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 23,
        ]);
        Permation::create([
            'name' => 'read.cat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 23,
        ]);
        // 24
        Permation::create([
            'name' => 'read.subcat.view',
            'label_en' => 'View',
            'label_id' => 'View',
            'label_ar' => 'عرض',
            'permation_for_id' => 24,
        ]);
        Permation::create([
            'name' => 'read.subcat.create',
            'label_en' => 'Create',
            'label_id' => 'Create',
            'label_ar' => 'إنشاء',
            'permation_for_id' => 24,
        ]);
        Permation::create([
            'name' => 'read.subcat.edit',
            'label_en' => 'Edit',
            'label_id' => 'Edit',
            'label_ar' => 'تعديل',
            'permation_for_id' => 24,
        ]);
        Permation::create([
            'name' => 'read.subcat.delete',
            'label_en' => 'Delete',
            'label_id' => 'Delete',
            'label_ar' => 'حذف',
            'permation_for_id' => 24,
        ]);
    }
}
