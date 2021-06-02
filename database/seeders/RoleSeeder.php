<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'label_ar' => 'سوبر أدمن',
            'label_en' => 'Super Admin',
        ]);
        Role::create([
            'name' => 'tester',
            'label_ar' => 'تجربة',
            'label_en' => 'Tester',
        ]);
    }
}
