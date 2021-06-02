<?php

use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Book\Book;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Read\Read;
use App\Http\Livewire\Admin\Book\Books;
use App\Http\Livewire\Admin\News\Newss;
use App\Http\Livewire\Admin\Read\Reads;
use App\Http\Livewire\Admin\Level\Level;
use App\Http\Livewire\Admin\Level\Levels;
use App\Http\Livewire\Admin\Book\Bookedit;
use App\Http\Livewire\Admin\Slider\Slider;
use App\Http\Livewire\Admin\Social\Social;
use App\Http\Livewire\Admin\Slider\Sliders;
use App\Http\Livewire\Admin\Social\Socials;
use App\Http\Livewire\Admin\Bookcat\Bookcat;
use App\Http\Livewire\Admin\Country\Country;
use App\Http\Livewire\Admin\Program\Program;
use App\Http\Livewire\Admin\Readcat\Readcat;
use App\Http\Livewire\Admin\Setting\Setting;
use App\Http\Livewire\Admin\Bookcat\Bookcats;
use App\Http\Livewire\Admin\Program\Programs;
use App\Http\Livewire\Admin\Readcat\Readcats;
use App\Http\Livewire\Admin\Setting\Settings;
use App\Http\Livewire\Admin\Country\Countries;
use App\Http\Livewire\Admin\Playlist\Playlist;
use App\Http\Livewire\Admin\Question\Question;
use App\Http\Livewire\Admin\Slider\Slideredit;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Livewire\Admin\Playlist\Playlists;
use App\Http\Livewire\Admin\Question\Questions;
use App\Http\Livewire\Admin\Program\Programedit;
use App\Http\Livewire\Admin\Booksubcat\Booksubcat;
use App\Http\Livewire\Admin\Instractor\Instractor;
use App\Http\Livewire\Admin\Programcat\Programcat;
use App\Http\Livewire\Admin\Readsubcat\Readsubcat;
use App\Http\Controllers\Admin\LanguagesController;
use App\Http\Livewire\Admin\Booksubcat\Booksubcats;
use App\Http\Livewire\Admin\Contributes\Contribute;
use App\Http\Livewire\Admin\Instractor\Instractors;
use App\Http\Livewire\Admin\Programcat\Programcats;
use App\Http\Livewire\Admin\Readsubcat\Readsubcats;
use App\Http\Livewire\Admin\Contributes\Contributes;
use App\Http\Livewire\Admin\Encyclopedia\Encyclopedia;
use App\Http\Livewire\Admin\Encyclopedia\Encyclopedias;
use App\Http\Livewire\Admin\Programsubcat\Programsubcat;
use App\Http\Livewire\Admin\Encyclopedia\Encyclopediadit;
use App\Http\Livewire\Admin\Programsubcat\Programsubcats;
use App\Http\Livewire\Admin\Encyclopediacat\Encyclopediacat;
use App\Http\Livewire\Admin\Encyclopediacat\Encyclopediacats;
use App\Http\Livewire\Admin\Encyclopediasubcat\Encyclopediasubcat;
use App\Http\Livewire\Admin\Encyclopediasubcat\Encyclopediasubcats;


Route::name('admin.')->group(function () {
    //  LOGIN SECTION
    Route::get('/login', Login::class)->name('login');
    // ADMIN LOGIN PAGE
    Route::group(['middleware' => 'admin'], function () {
        // CHANGE LANGUAGE
        Route::get('/lang/{lang}', [LanguagesController::class, 'languages'])->name('languages');
        // ADMIN DASHBOARD
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        // PROGRAM CATEGORY START
        Route::get('/program/cat', Programcats::class)->name('programcats');
        Route::get('/program/cat/show/{programcat}', Programcat::class)->name('programcat');
        Route::get('/program/cat/edit/{programcat}', 'App\Http\Livewire\Admin\Programcat\Edit')->name('programcat.edit');
        Route::get('/program/cat/create', 'App\Http\Livewire\Admin\Programcat\Create')->name('programcat.create');
        // PROGRAM CATEGORY END
        // PROGRAM SUB CATEGORY START
        Route::get('/program/subcat', Programsubcats::class)->name('programsubcats');
        Route::get('/program/subcat/show/{programsubcat}', Programsubcat::class)->name('programsubcat');
        Route::get('/program/subcat/edit/{programsubcat}', 'App\Http\Livewire\Admin\Programsubcat\Edit')->name('programsubcat.edit');
        Route::get('/program/subcat/create', 'App\Http\Livewire\Admin\Programsubcat\Create')->name('programsubcat.create');
        // PROGRAM SUB CATEGORY END
        // LOGOUT
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
        // INSTRACTOR
        Route::get('/instractor', Instractors::class)->name('instractors');
        Route::get('/instractor/show/{instractor}', Instractor::class)->name('instractor');
        Route::get('/instractors/create', 'App\Http\Livewire\Admin\Instractor\Create')->name('instractor.create');
        Route::get('/instractors/{instractor}/edit', 'App\Http\Livewire\Admin\Instractor\Edit')->name('instractor.edit');
        // PROGRAM
        Route::get('/program', Programs::class)->name('programs');
        Route::get('/program/show/{program}', Program::class)->name('program');
        Route::get('/program/edit/{program}', Programedit::class)->name('program.edit');
        Route::get('/program/create', 'App\Http\Livewire\Admin\Program\Create')->name('program.create');

        // SOCIAL MEDIA
        Route::get('/social', Socials::class)->name('socials');
        Route::get('/social/show/{social}', Social::class)->name('social');
        Route::get('/socials/create', 'App\Http\Livewire\Admin\Social\Create')->name('social.create');
        Route::get('/socials/{social}/edit', 'App\Http\Livewire\Admin\Social\Edit')->name('social.edit');
        // CONTRIBUTES MOSHRKET EL MO7TAWA
        Route::get('/contribute', Contributes::class)->name('contributes');
        Route::get('/contribute/show/{contribute}', Contribute::class)->name('contribute');
        // COUNTRIES
        Route::get('/country', Countries::class)->name('countries');
        Route::get('/country/show/{country}', Country::class)->name('country');
        Route::get('/country/edit/{country}', 'App\Http\Livewire\Admin\Country\Edit')->name('country.edit');
        Route::get('/country/create', 'App\Http\Livewire\Admin\Country\Create')->name('country.create');
        // LEVELS FOR FORM
        Route::get('/level', Levels::class)->name('levels');
        Route::get('/level/show/{level}', Level::class)->name('level');
        Route::get('/level/edit/{level}', 'App\Http\Livewire\Admin\Level\Edit')->name('level.edit');
        Route::get('/level/create', 'App\Http\Livewire\Admin\Level\Create')->name('level.create');
        // Encyclopedias ( mawsoo33a )
        Route::get('/encyclopedia', Encyclopedias::class)->name('encyclopedias');
        Route::get('/encyclopedia/show/{encyclopedia}', Encyclopedia::class)->name('encyclopedia');
        Route::get('/encyclopedia/edit/{encyclopedia}', Encyclopediadit::class)->name('encyclopedia.edit');
        Route::get('/encyclopedia/create', 'App\Http\Livewire\Admin\Encyclopedia\Create')->name('encyclopedia.create');
        // ENCYCLOPEDIA CATEGORY START
        Route::get('/encyclopedia/cat', Encyclopediacats::class)->name('encyclopediacats');
        Route::get('/cat/show/{encyclopediacat}', Encyclopediacat::class)->name('encyclopediacat');
        Route::get('/cats/edit/{encyclopediacat}', 'App\Http\Livewire\Admin\Encyclopediacat\Edit')->name('encyclopediacat.edit');
        Route::get('/cat/create', 'App\Http\Livewire\Admin\Encyclopediacat\Create')->name('encyclopediacat.create');
        // ENCYCLOPEDIA SUB CATEGORY START
        Route::get('/encyclopedia/subcat', Encyclopediasubcats::class)->name('encyclopediasubcats');
        Route::get('/encyclopedia/subcat/show/{encyclopediasubcat}', Encyclopediasubcat::class)->name('encyclopediasubcat');
        Route::get('/subcat/edit/{encyclopediasubcat}', 'App\Http\Livewire\Admin\Encyclopediasubcat\Edit')->name('encyclopediasubcat.edit');
        Route::get('/subcat/create', 'App\Http\Livewire\Admin\Encyclopediasubcat\Create')->name('encyclopediasubcat.create');
        // READ CATEGORY START
        Route::get('/read/cat', Readcats::class)->name('readcats');
        Route::get('/read/cat/show/{readcat}', Readcat::class)->name('readcat');
        Route::get('/readss/cat/create', 'App\Http\Livewire\Admin\Readcat\Create')->name('readcat.create');
        Route::get('/readss/cat/edit/{readcat}', 'App\Http\Livewire\Admin\Readcat\Edit')->name('readcat.edit');

        // READ SUB CATEGORY START
        Route::get('/read/subcat', Readsubcats::class)->name('readsubcats');
        Route::get('/read/subcat/show/{readsubcat}', Readsubcat::class)->name('readsubcat');
        Route::get('/readss/subcat/create', 'App\Http\Livewire\Admin\Readsubcat\Create')->name('readsubcat.create');
        Route::get('/readss/subcat/edit/{readsubcat}', 'App\Http\Livewire\Admin\Readsubcat\Edit')->name('readsubcat.edit');
        // READ
        Route::get('/read', Reads::class)->name('reads');
        Route::get('/read/show/{read}', Read::class)->name('read');
        Route::get('/read/archive', 'App\Http\Livewire\Admin\Read\Readarchive')->name('reads.archive');
        // BOOK CATEGORY START
        Route::get('/book/cat', Bookcats::class)->name('bookcats');
        Route::get('/book/cat/show/{bookcat}', Bookcat::class)->name('bookcat');
        Route::get('/book/cat/create', 'App\Http\Livewire\Admin\Bookcat\Create')->name('bookcat.create');
        Route::get('/book/cat/edit/{bookcat}', 'App\Http\Livewire\Admin\Bookcat\Edit')->name('bookcat.edit');
        // BOOK SUB CATEGORY START
        Route::get('/book/subcat', Booksubcats::class)->name('booksubcats');
        Route::get('/book/subcat/show/{booksubcat}', Booksubcat::class)->name('booksubcat');
        Route::get('/book/subcat/create', 'App\Http\Livewire\Admin\Booksubcat\Create')->name('booksubcat.create');
        Route::get('/book/subcat/edit/{booksubcat}', 'App\Http\Livewire\Admin\Booksubcat\Edit')->name('booksubcat.edit');
        // BOOK
        Route::get('/book', Books::class)->name('books');
        Route::get('/book/show/{book}', Book::class)->name('book');
        Route::get('/book/edit/{book}', Bookedit::class)->name('book.edit');
        Route::get('/book/create', 'App\Http\Livewire\Admin\Book\Create')->name('book.create');
        // SETTINGS
        Route::get('/settings', Settings::class)->name('settings');
        Route::get('/setting/{setting}', Setting::class)->name('setting');
        Route::get('/settings/create', 'App\Http\Livewire\Admin\Setting\Create')->name('setting.create');
        Route::get('/settings/{setting}/edit', 'App\Http\Livewire\Admin\Setting\Edit')->name('setting.edit');
        // PLAYLISTS
        Route::get('/playlists', Playlists::class)->name('playlists');
        Route::get('/playlist/{playlist}', Playlist::class)->name('playlist');
        Route::get('/playlists/create', 'App\Http\Livewire\Admin\Playlist\Create')->name('playlist.create');
        Route::get('/playlists/{playlist}/edit', 'App\Http\Livewire\Admin\Playlist\Edit')->name('playlist.edit');
        // NEWS
        Route::get('/news', Newss::class)->name('news');
        Route::get('/news/create', 'App\Http\Livewire\Admin\News\Create')->name('news.create');
        Route::get('/news/{newsId}/edit', 'App\Http\Livewire\Admin\News\Edit')->name('news.edit');
        // SLIDER
        Route::get('/slider', Sliders::class)->name('sliders');
        Route::get('/slider/show/{slider}', Slider::class)->name('slider');
        Route::get('/sliders/edit/{slider}', Slideredit::class)->name('slider.edit');
        Route::get('/sliders/create', 'App\Http\Livewire\Admin\Slider\Create')->name('slider.create');
        // QUESTIONS
        Route::get('/question', Questions::class)->name('questions');
        Route::get('/question/show/{question}', Question::class)->name('question');
        Route::get('/question/answered', 'App\Http\Livewire\Admin\Question\Questionsanswered')->name('questions.answered');

        // ABOUT PAGE
        Route::get('/about', 'App\Http\Livewire\Admin\About\Index')->name('about.index');
        Route::get('/about/{about}', 'App\Http\Livewire\Admin\About\Show')->name('about.show');
        Route::get('/abouts/create', 'App\Http\Livewire\Admin\About\Create')->name('about.create');
        Route::get('/about/{about}/edit', 'App\Http\Livewire\Admin\About\Edit')->name('about.edit');
        // CONTACT PAGE MESSAGES
        Route::get('/contact', 'App\Http\Livewire\Admin\Contact\Index')->name('contact.index');
        Route::get('/contact/{contact}', 'App\Http\Livewire\Admin\Contact\Show')->name('contact.show');
        // CONTACT PAGE
        Route::get('/icontactinfo', 'App\Http\Livewire\Admin\Contactinfo\Index')->name('contactinfo.index');
        Route::get('/icontactinfo/{contactinfo}', 'App\Http\Livewire\Admin\Contactinfo\Show')->name('contactinfo.show');
        Route::get('/icontactinfo/{contactinfo}/edit', 'App\Http\Livewire\Admin\Contactinfo\Edit')->name('contactinfo.edit');
        Route::get('/cicontactinfo/create', 'App\Http\Livewire\Admin\Contactinfo\Create')->name('contactinfo.create');
        // ADMIN SECTION
        Route::get('/admin/index', 'App\Http\Livewire\Admin\Admin\Index')->name('admin.index');
        Route::get('/admin/create', 'App\Http\Livewire\Admin\Admin\Create')->name('admin.create');
        Route::get('/admin/{admin}', 'App\Http\Livewire\Admin\Admin\Show')->name('admin.show');
        Route::get('/admin/edit/{admin}', 'App\Http\Livewire\Admin\Admin\Edit')->name('admin.edit');
        // ROLE SECTION
        Route::get('/role/index', 'App\Http\Livewire\Admin\Role\Index')->name('role.index');
        Route::get('/role/create', 'App\Http\Livewire\Admin\Role\Create')->name('role.create');
        Route::get('/role/{role}', 'App\Http\Livewire\Admin\Role\Show')->name('role.show');
        Route::get('/role/edit/{role}', 'App\Http\Livewire\Admin\Role\Edit')->name('role.edit');

    }); // END ADMIN MIDDLEWARE

}); // END ADMIN ROYTE NAMES
