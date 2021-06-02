<x-slot name="title">@lang('app.dashboard') | @lang('app.home')</x-slot>
<x-slot name="pageTitle">@lang('app.dashboard')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript: void(0);">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.home')</li>
</x-slot>
<div class="w-100 row dashboard">
    {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-purple text-light" >
        <a href="{{ route('admin.admin.index') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt  text-light"></i></h1>
            <h3 class="card-title  text-light">@lang('app.admin_count')</h3>
            <h3 class="card-title  text-light">{{ $adminCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}

 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-primary" >
        <a href="{{ route('admin.instractors') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.instractors_count')</h3>
            <h3 class="card-title text-light">{{ $instractorsCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}



 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-info" >
        <a href="{{ route('admin.programs') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.programs_count')</h3>
            <h3 class="card-title text-light">{{ $programsCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}


 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border" >
        <a href="{{ route('admin.news') }}" >
        <div class="card-body text-center bg-danger">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.news_count')</h3>
            <h3 class="card-title text-light">{{ $newsCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}

 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-warning" >
        <a href="{{ route('admin.books') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt"></i></h1>
            <h3 class="card-title">@lang('app.books_count')</h3>
            <h3 class="card-title">{{ $booksCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}

 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-dark" >
        <a href="{{ route('admin.encyclopedias') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.encyclopdia_count')</h3>
            <h3 class="card-title text-light">{{ $encyclopediasCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}

 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-secondary">
        <a href="{{ route('admin.reads') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.reads_count')</h3>
            <h3 class="card-title text-light">{{ $readsCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}

 {{-- CARD START --}}
    <div class="col-md-3">
    <div class="card border bg-success" >
        <a href="{{ route('admin.questions') }}" >
        <div class="card-body text-center">
            <h1><i class="fas fa-tachometer-alt text-light"></i></h1>
            <h3 class="card-title text-light">@lang('app.questions_count')</h3>
            <h3 class="card-title text-light">{{ $questionsCount }}</h3>
        </div>

        </a>
    </div>
</div>
{{-- CARD END --}}
</div>
