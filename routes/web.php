<?php

use App\Mail\AnswerMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\EncyclopediaController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Livewire\Frontend\Welcome')->name('welcome');
// LANGUAGE
Route::get('/lang/{lang}', [LanguageController::class, 'languages'])->name('languages');
// ABOUT
Route::get('/about', 'App\Http\Livewire\Frontend\About')->name('about');
// PARTICIPATE
Route::get('/participate', 'App\Http\Livewire\Frontend\Participate\Participate')->name('participate');
// CONTACT
Route::get('/contact', 'App\Http\Livewire\Frontend\Contact\Contact')->name('contact');
// INSTRACTOR
Route::get('/instractor/{instractor}/{slug}', 'App\Http\Livewire\Frontend\Instractor\Instractor')->name('instractor');
// QUESTION
Route::get('/question/', 'App\Http\Livewire\Frontend\Question\Question')->name('question');
Route::get('/question/answer', 'App\Http\Livewire\Frontend\Question\Answer')->name('answer');
// ENCYCLOPEDIA START
Route::get('/encyclopedias/categories', 'App\Http\Livewire\Frontend\Encyclopediacat')->name('encyclopedia.cat');
Route::get('/encyclopedias/{encyclopediaCatId}', 'App\Http\Livewire\Frontend\Encyclopedias')->name('encyclopedias');
Route::get('/encyclopedias/subcategory/{encyclopediaSubCatId}', 'App\Http\Livewire\Frontend\Encyclopediabysubcat')->name('encyclopedia.by.subcat');
Route::get('/encyclopedia/{encyclopedia}/{slug}', 'App\Http\Livewire\Frontend\Encyclopedia')->name('encyclopedia');
// ENCYCLOPEDIA START

// BOOK START
Route::get('/books/categories', 'App\Http\Livewire\Frontend\Book\Bookscat')->name('books.cat');
Route::get('/books/{bookCatId}', 'App\Http\Livewire\Frontend\Book\Books')->name('books');
Route::get('/books/subcategory/{bookSubCatId}', 'App\Http\Livewire\Frontend\Book\Bookssubcat')->name('books.subcat');
Route::get('/book/{book}/{slug}', 'App\Http\Livewire\Frontend\Book\Book')->name('book');
// BOOK END

// PROGRAMS START
Route::get('/programs/categories', 'App\Http\Livewire\Frontend\Program\Programscat')->name('programs.cat');
Route::get('/programs/playlists/{programCatId}', 'App\Http\Livewire\Frontend\Program\Playlists')->name('playlists');
Route::get('/programs/subcat/playlists/{programSubCatId}', 'App\Http\Livewire\Frontend\Program\Playlistssubcat')->name('playlists.subcat');
Route::get('/programs/{playlistId}', 'App\Http\Livewire\Frontend\Program\Programs')->name('programs');
Route::get('/programs/subcategory/{programSubCatId}', 'App\Http\Livewire\Frontend\Program\Programssubcat')->name('programs.subcat');
Route::get('/program/{program}/{slug}', 'App\Http\Livewire\Frontend\Program\Program')->name('program');
// PROGRAMS END
// DEPEND ON MENUS STRAT
Route::get('/getencyclopediasubcats/{encyclopediaCatId}', [MenuController::class, 'getEncyclopediaSubCats']);
Route::get('/getmatchedquestions/{question}', [MenuController::class, 'getMatchedQuestions']);
// DEPEND ON MENUS END
// AJX CALL FOR SAVE ASK QUESTION
Route::post('/question/store', [EncyclopediaController::class, 'questionStore']);
// Route::get('/test', function () {
//     return new AnswerMail();
// });
