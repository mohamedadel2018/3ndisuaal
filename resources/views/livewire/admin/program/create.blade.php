<x-slot name="title">@lang('app.dashboard') | @lang('app.programs')</x-slot>
<x-slot name="pageTitle">@lang('app.programs')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.programs') }}">@lang('app.programs')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')

    <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('app.playlists')</label>
                <select class="form-control" wire:model="playlist_id">
                    <option value="-1">@lang('app.playlist')</option>
                    @forelse ($playlists as $playlist)
                    <option value="{{ $playlist->id }}">{{ $playlist->translate('name') }}</option>
                    @empty
                    <option>@lang('app.data_not_found')</option>
                    @endforelse
                </select>

                @error('playlist_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
                @enderror
            </div>

        </div>

 <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_ar')</label>
            <input type="text" wire:model="title_ar" class="form-control">
            @error('title_ar')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_en')</label>
            <input type="text" wire:model="title_en" class="form-control">
            @error('title_en')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.title_id')</label>
            <input type="text" wire:model="title_id" class="form-control">
            @error('title_id')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
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
    <div class="col-md-6">
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

    <div class="col-md-6">
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

    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.sound_ar')</label>
            <input type="text" wire:model="sound_ar" class="form-control">
            @error('sound_ar')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.sound_en')</label>
            <input type="text" wire:model="sound_en" class="form-control">
            @error('sound_en')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.sound_id')</label>
            <input type="text" wire:model="sound_id" class="form-control">
            @error('sound_id')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="about_ar"></textarea>
            @error('about_ar')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_en')</label>
            <textarea class="form-control" id="field-7" wire:model="about_en"></textarea>
            @error('about_en')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.description_id')</label>
            <textarea class="form-control" id="field-7" wire:model="about_id"></textarea>
            @error('about_id')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <h3 class="text-center text-purple w-100">@lang('app.seo_section')</h3>
    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.meta_description_ar')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_description_ar"></textarea>
            @error('meta_description_ar')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.meta_description_en')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_description_en"></textarea>
            @error('meta_description_en')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.meta_description_id')</label>
            <textarea class="form-control" id="field-7" wire:model="meta_description_id"></textarea>
            @error('meta_description_id')
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
        @include('alerts')
    </div>

</div>
