<x-slot name="title">@lang('app.dashboard') | @lang('app.settings')</x-slot>
<x-slot name="pageTitle">@lang('app.settings')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.settings') }}">@lang('app.settings')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">

    {{-- START --}}
    <div class="col-md-12">
        @include('alerts')
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.about_us_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="about_ar"></textarea>
            @error('about_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.about_us_en')</label>
            <textarea class="form-control" id="field-7" wire:model="about_en"></textarea>
            @error('about_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.about_us_id')</label>
            <textarea class="form-control" id="field-7" wire:model="about_id"></textarea>
            @error('about_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_vision_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="our_vision_ar"></textarea>
            @error('our_vision_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_vision_en')</label>
            <textarea class="form-control" id="field-7" wire:model="our_vision_en"></textarea>
            @error('our_vision_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_vision_id')</label>
            <textarea class="form-control" id="field-7" wire:model="our_vision_id"></textarea>
            @error('our_vision_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_goals_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="our_goals_ar"></textarea>
            @error('our_goals_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_goals_en')</label>
            <textarea class="form-control" id="field-7" wire:model="our_goals_en"></textarea>
            @error('our_goals_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}


    {{-- START --}}
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.our_goals_id')</label>
            <textarea class="form-control" id="field-7" wire:model="our_goals_id"></textarea>
            @error('our_goals_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    {{-- END --}}



    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.title_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_title_ar"></textarea>
            @error('meta_title_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.title_en')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_title_en"></textarea>
            @error('meta_title_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.title_id')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_title_id"></textarea>
            @error('meta_title_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_descrption_ar"></textarea>
            @error('meta_descrption_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_en')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_descrption_en"></textarea>
            @error('meta_descrption_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_id')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_descrption_id"></textarea>
            @error('meta_descrption_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="store">@lang('app.create')</button>
        <hr>
    </div>
</div>
