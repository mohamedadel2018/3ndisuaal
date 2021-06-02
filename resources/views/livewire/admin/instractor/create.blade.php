<x-slot name="title">@lang('app.dashboard') | @lang('app.instractors')</x-slot>
<x-slot name="pageTitle">@lang('app.instractors')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.instractors') }}">@lang('app.instractors')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
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
                        <input type="file" id="example-fileinput" class="form-control-file" onchange="loadFile(event)"
                            wire:model="image">
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
                        <label for="the-file">@lang('app.word')</label>
                        <input type="file" id="the-file" class="form-control-file" wire:model="word">
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
                {{-- <div>
                                        <p class="text-center">@lang('app.new')</p>
                                        <img id="output" src="{{ $preview_image }}" class="border border-secondary"
                width="100" height="100" wire:ignore>
            </div> --}}
                <div>
                    {{-- @if (File::extension($preview_image) == 'pdf')
                <a href="{{ $preview_image }}" target="_blank">
                    <img src="{{ asset('images/file-pdf.png') }}" class="border " width="100" height="100">
                </a>
                @else
                <img src="{{ asset('images/file-pdf-empty.png') }}" class="border" width="100" height="100">
                @endif --}}
                    {{-- <p class="text-center">@lang('app.old')</p>
                                        <img src="{{ $preview_image }}" class="border" width="100" height="100"> --}}
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="store">@lang('app.create')</button>
        <hr>
        @include('alerts')
    </div>
</div>
