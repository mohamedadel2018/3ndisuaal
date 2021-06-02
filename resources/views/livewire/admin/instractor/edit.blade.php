<x-slot name="title">@lang('app.dashboard') | @lang('app.instractors')</x-slot>
<x-slot name="pageTitle">@lang('app.instractors')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.instractors') }}">@lang('app.instractors')</a></li>
    <li class="breadcrumb-item active">@lang('app.details')</li>
</x-slot>
<div class="row w-100">

    <div class="col-md-12">
        @include('alerts')
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name_ar')</label>
            <input type="text" wire:model="name_ar" class="form-control">
            @error('name_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name_en')</label>
            <input type="hidden" wire:model="selected_id">
            <input type="text" wire:model="name_en" class="form-control">
            @error('name_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name_id')</label>
            <input type="text" wire:model="name_id" class="form-control">
            @error('name_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>


    <div class="col-sm-12">
        <div class="form-group no-margin">
            <label for="field-7" class="control-label">@lang('app.instractor_about_ar')</label>
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
            <label for="field-7" class="control-label">@lang('app.instractor_about_en')</label>
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
            <label for="field-7" class="control-label">@lang('app.instractor_about_id')</label>
            <textarea class="form-control" id="field-7" wire:model="about_id"></textarea>
            @error('about_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <hr>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12">
                <div class="form-group no-margin">
                    <div class="form-group mb-3">
                        <label for="example-fileinput">@lang('app.image')</label>
                        <input type="file" id="example-fileinput" class="form-control-file" wire:model="image">
                        <h4 class="text-purple" wire:loading wire:target="image">
                            <progress max="100" x-bind:value="progress"></progress>
                        </h4>
                        @error('image')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center">

                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" width="100" height="100">
                @else
                    <img src="{{ $image_preview }}" width="100" height="100">
                @endif
            </div>
        </div>
        <hr>
    </div>
    <div class="col-sm-12">
        <hr>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12">
                <div class="form-group no-margin">
                    <div class="form-group mb-3">
                        <label for="example-fileinput">@lang('app.word')</label>
                        <input type="file" id="example-fileinput" class="form-control-file" wire:model="word">
                        <h4 class="text-purple" wire:loading wire:target="word">
                            <progress max="100" x-bind:value="progress"></progress>
                        </h4>
                        @error('word')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center">
                @if (File::extension($word_preview) == 'docx')
                    <a href="{{ $word_preview }}" target="_blank">
                        <div class="word-file-preview flex-column align-items-center justify-content-center">
                            <i class="la la-file la-3x"></i>
                            <p>word</p>
                        </div>
                    </a>
                @endif
            </div>
        </div>
        <hr>
    </div>
    <hr>
    <h3 class="text-center text-purple w-100">@lang('app.seo_section')</h3>
    <hr>
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
            wire:click="update">@lang('app.update')</button>
        <hr>
        @include('alerts')
    </div>
</div>
