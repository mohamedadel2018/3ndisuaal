<x-slot name="title">@lang('app.dashboard') | @lang('app.settings')</x-slot>
<x-slot name="pageTitle">@lang('app.settings')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.settings') }}">@lang('app.settings')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    <div class="col-md-12">
        @include('alerts')
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_ar')</label>
            <input type="text" wire:model="meta_title_ar" class="form-control">
            @error('meta_title_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_en')</label>
            <input type="text" wire:model="meta_title_en" class="form-control">
            @error('meta_title_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_id')</label>
            <input type="text" wire:model="meta_title_id" class="form-control">
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

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.video_ar')</label>
            <input type="text" wire:model="video_ar" class="form-control">
            @error('video_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.video_en')</label>
            <input type="text" wire:model="video_en" class="form-control">
            @error('video_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.video_id')</label>
            <input type="text" wire:model="video_id" class="form-control">
            @error('video_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('app.home_cover')</label>
            <select class="form-control" wire:model="home_cover">
                <option value="">@lang('app.home_cover')</option>
                <option value="1">@lang('app.video')</option>
                <option value="2">@lang('app.slider')</option>
            </select>

            @error('home_cover')
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
