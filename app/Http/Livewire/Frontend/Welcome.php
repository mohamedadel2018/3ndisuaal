<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Book;
use App\Models\News;
use App\Models\Read;
use App\Models\Level;
use App\Models\Slider;
use App\Models\Country;
use App\Models\Program;
use App\Models\ReadCat;
use Livewire\Component;
use App\Models\Playlist;
use App\Models\Instractor;
use App\Models\ReadSubCat;
use App\Models\Encyclopedia;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;

class Welcome extends Component
{
    public $programSearch = '';
    public $encyclopediaSearch = '';
    public $bookSearch = '';
    public $country_id = '';
    public $read_cat_id = '';
    public $read_sub_cat_id = '';
    public $program_id = '';
    public $level_id = '';
    public $type = '';
    public $name = '';
    public $phone = '';
    public $email = '';
    // public $id_number = '';
    public $good_time = '';
    public $readSubCats = '';
    public $encyclopedias = '';
    public $sliders = '';
    public $encyclopedia_cat_id = '';
    public $encyclopedia_sub_cat_id = '';
    public $encyclopediaSubCatQuestions = '';
    public $question = '';

    protected $listeners = [
        'askTheQustion',
        'updatedEncyclopediaCatId',
    ];
    public function mount()
    {
        $this->readSubCats = collect();
        $this->encyclopediaSubCatQuestions = collect();
        $this->encyclopedias =
            Encyclopedia::select(
                'id',
                'question_ar',
                'question_en',
                'question_id',
                'slug_ar',
                'slug_en',
                'slug_id',
            )->orderBy('views', 'desc')->take(20)->get();
        $this->sliders =
            Slider::with('images')->get();
    }
    public function updatedReadCatId($state)
    {
        $this->read_cat_id = $state;
        $this->readSubCats = ReadSubCat::where('read_cat_id', $state)->get();
    }
    public function updatedEncyclopediaCatId($encyclopediaCatId)
    {
        $this->encyclopedia_cat_id = $encyclopediaCatId;
        $this->encyclopediaSubCatQuestions = EncyclopediaSubCat::where('encyclopedia_cat_id', $encyclopediaCatId)->get();
    }
    public function readRegister()
    {
        $this->validate([
            'country_id' => 'required|integer|exists:countries,id',
            'read_cat_id' => 'required|integer|exists:read_cats,id',
            'read_sub_cat_id' => 'required|integer|exists:read_sub_cats,id',
            // 'program_id' => 'required|integer|exists:programs,id',
            // 'level_id' => 'required|integer|exists:levels,id',
            'type' => 'required|integer|in:1,2',
            'name' => 'required|string|min:3|max:100',
            'phone' => 'required|string|min:3|max:100',
            'email' => 'required|string|email|min:8|max:100|unique:reads',
            // 'id_number' => 'required|string|min:1|max:100',
            'good_time' => 'required|string|min:1',
        ], messages());
        // CREATE DATA
        Read::create([
            'read_cat_id' => $this->read_cat_id,
            'read_sub_cat_id' => $this->read_sub_cat_id,
            'country_id' => $this->country_id,
            // 'level_id'=> $this->level_id,
            // 'program_id'=> $this->program_id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            // 'id_number'=> $this->id_number,
            'type' => $this->type,
            'good_time' => $this->good_time,
        ]);

        session()->flash('success', __('app.data_registered'));
        $this->reset([
            'read_cat_id',
'read_sub_cat_id',
'country_id',
'name',
'phone',
'email',
'type',
'good_time',
            ]);
        $this->resetValidation();
        $this->readSubCats = collect();
    }
    public function askTheQustion()
    {
        dd(request('question'));
        $this->validate([
            'encyclopedia_cat_id' => 'required|integer|exists:encyclopedia_cats,id',
            'encyclopedia_sub_cat_id' => 'required|integer|exists:encyclopedia_sub_cats,id',
            'question' => 'required|string|min:1',
        ], messages());
        // CREATE DATA
        dd(request()->all());
        Read::create([
            'read_cat_id' => $this->read_cat_id,
            'read_sub_cat_id' => $this->read_sub_cat_id,
            'country_id' => $this->country_id,
            'level_id' => $this->level_id,
            'program_id' => $this->program_id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'id_number' => $this->id_number,
            'type' => $this->type,
            'good_time' => $this->good_time,
        ]);

        session()->flash('success', __('app.data_registered'));
        $this->reset();
        $this->resetValidation();
        $this->readSubCats = collect();
    }
    public function render()
    {
        // FOR SLIDER
        $playlists = Playlist::where('is_featured', 1)->latest()->get();
        // COUNTRIES
        $countries = Country::all();
        // READ MAIN CAT
        $readCats = ReadCat::all();
        // PROGRAMS
        $programLists = Program::select('id', 'title_ar', 'title_en', 'title_id')->get();
        // LEVELS
        $levels = Level::all();
        $randomEncyclopediaCats = EncyclopediaCat::select(
            'id',
            'name_ar',
            'name_en',
            'name_id',
        )->take(5)->inRandomOrder()->get();
        // ENCYCLOPEDIA CAT
        $encyclopediaCats = EncyclopediaCat::select(
            'id',
            'name_ar',
            'name_en',
            'name_id',
        )->get();

        // ENCYCLOPEDIA MOST VIEWED QUESTIONS
        $encyclopediasMostViwedQuestion = Encyclopedia::select(
            'id',
            'question_ar',
            'question_en',
            'question_id',
            'slug_ar',
            'slug_en',
            'slug_id',
        )->orderBy('views', 'desc')->take(10)->get();
        // ENCYCLOPEDIA
        $encyclopediasSearch = $this->encyclopediaSearch != '' ?  Encyclopedia::select(
            'id',
            'question_ar',
            'question_en',
            'question_id',
            'slug_ar',
            'slug_en',
            'slug_id',
        )->where('question_' . app()->getLocale(), 'LIKE', '%' . trim($this->encyclopediaSearch) . '%')->take(10)->get() : collect();
        // BOOKS
        $books = Book::where('is_featured', 1)->get();
        // BOOKS SEARCH
        $booksSearch = $this->bookSearch != '' ?  Book::select(
            'id',
            'title_ar',
            'title_en',
            'title_id',
            'slug_ar',
            'slug_en',
            'slug_id',
        )->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->bookSearch) . '%')->take(10)->get() : collect();
        // INSTRACTORS
        $instractors = Instractor::with('images')->select(
            'id',
            'name_ar',
            'name_en',
            'name_id',
            'slug_ar',
            'slug_en',
            'slug_id'
        )->latest()->get();
        // NEWS
        $newss = News::select(
            'id',
            'title_ar',
            'title_en',
            'title_id'
        )->get();
        // dd($newss);
        // FOR PROGRAM SEARCH NOTE I'M LISTING PLAYLIST NOT PROGRAMS BUT KEEPS VARS NAME AS PROGRAM
        $programs = $this->programSearch != '' ? Playlist::select('id', 'name_ar', 'name_en', 'name_id')->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->programSearch) . '%')->take(10)->get() : collect();
        return view('livewire.frontend.welcome', [
            'playlists' => $playlists,
            'programs' => $programs,
            'countries' => $countries,
            'readCats' => $readCats,
            'programLists' => $programLists,
            'levels' => $levels,
            'instractors' => $instractors,
            'encyclopediaCats' => $encyclopediaCats,
            'randomEncyclopediaCats' => $randomEncyclopediaCats,
            'encyclopediasSearch' => $encyclopediasSearch,
            'books' => $books,
            'booksSearch' => $booksSearch,
            'newss' => $newss,
            'encyclopediasMostViwedQuestion' => $encyclopediasMostViwedQuestion,
        ]);
    }
}
