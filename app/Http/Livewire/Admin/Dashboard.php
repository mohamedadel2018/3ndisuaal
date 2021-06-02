<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use App\Models\News;
use App\Models\Read;
use App\Models\Admin;
use App\Models\Program;
use Livewire\Component;
use App\Models\Question;
use App\Models\Instractor;
use App\Models\Encyclopedia;

class Dashboard extends Component
{
    public $adminCount;
    public $instractorsCount;
    public $programsCount;
    public $newsCount;
    public $booksCount;
    public $encyclopediasCount;
    public $readsCount;
    public $questionsCount;
    public function mount()
    {
        $this->adminCount = Admin::count();
        $this->instractorsCount =   Instractor::count();
        $this->programsCount =   Program::count();
        $this->newsCount =   News::count();
        $this->booksCount =   Book::count();
        $this->encyclopediasCount =   Encyclopedia::count();
        $this->readsCount =   Read::count();
        $this->questionsCount =   Question::count();
    }
    public function render()
    {
        return view('livewire.admin.dashboard')->layout(ADMIN_LAYOUT);
    }
}
