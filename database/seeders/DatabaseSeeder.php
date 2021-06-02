<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\News;
use App\Models\Read;
use App\Models\About;
use App\Models\Admin;
use App\Models\Level;
use App\Models\Slider;
use App\Models\Social;
use App\Models\BookCat;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Program;
use App\Models\ReadCat;
use App\Models\Setting;
use App\Models\Playlist;
use App\Models\Question;
use App\Models\BookSubCat;
use App\Models\Contribute;
use App\Models\Instractor;
use App\Models\ProgramCat;
use App\Models\ReadSubCat;
use App\Models\ContactInfo;
use App\Models\Encyclopedia;
use App\Models\ProgramSubCat;
use App\Models\EncyclopediaCat;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(20)->create();
        ProgramCat::factory()->count(20)->create();
        ProgramSubCat::factory()->count(20)->create();
        // Admin::factory()->count(1)->create();
        Instractor::factory()->count(20)->create();
        Program::factory()->count(300)->create();
        Social::factory()->count(2)->create();
        Contribute::factory()->count(20)->create();
        Country::factory()->count(20)->create();
        Level::factory()->count(20)->create();
        Encyclopedia::factory()->count(20)->create();
        EncyclopediaCat::factory()->count(20)->create();
        EncyclopediaSubCat::factory()->count(20)->create();
        ReadCat::factory()->count(20)->create();
        ReadSubCat::factory()->count(20)->create();
        Read::factory()->count(20)->create();
        BookCat::factory()->count(20)->create();
        BookSubCat::factory()->count(20)->create();
        Book::factory()->count(50)->create();
        Setting::factory()->count(2)->create();
        Playlist::factory()->count(10)->create();
        News::factory()->count(20)->create();
        Slider::factory()->count(20)->create();
        Question::factory()->count(50)->create();
        About::factory()->count(1)->create();
        // Contact::factory()->count(20)->create();
        ContactInfo::factory()->count(2)->create();
        // PRODUCTION SEEDERS START


        $this->call([
            PermationForSeeder::class,
            PermationSeeder::class,
            RoleSeeder::class,
        ]);
        // CREATE DATA
        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 123456,
        ]);
        $admin2 = Admin::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'username' => 'test',
            'password' => 123456,
        ]);
        $admin->roles()->attach(1);
        $admin2->roles()->attach(2);
        // PRODUCTION SEEDERS END
    }
}
