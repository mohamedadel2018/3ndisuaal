<x-slot name="title">@lang('app.dashboard') | @lang('app.books')</x-slot>
<x-slot name="pageTitle">@lang('app.books')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.books') }}">@lang('app.books')</a></li>
    <li class="breadcrumb-item active">@lang('app.details')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.categories')</label>
            <select class="form-control" wire:model="selectedState">
                <option value="">@lang('app.categories')</option>
                @forelse ($bookCats as $bookCat)
                <option value="{{ $bookCat->id }}">{{ $bookCat->translate('name') }}</option>
                @empty
                <option>@lang('app.data_not_found')</option>
                @endforelse
            </select>

            @error('selectedState')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.sub_categories')</label>
            <select class="form-control" wire:model="book_sub_cat_id">
                <option value="-1">@lang('app.choose_sub_categories')</option>
                @forelse ($bookSubCats as $bookSC)
                <option value="{{ $bookSC->id }}">
                    {{ $bookSC->translate('name') }}
                </option>
                @empty
                @endforelse
            </select>

            @error('book_sub_cat_id')
            <p class="text-danger lead fz-16">
                {{ $message }}
            </p>
            @enderror
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.instractors')</label>
            <select class="form-control" wire:model="instractor_id">
                <option value="-1">@lang('app.choose_instractor')</option>
                @forelse ($instractors as $instractor)
                <option value="{{ $instractor->id }}">{{ $instractor->translate('name') }}</option>
                @empty
                <option>@lang('app.data_not_found')</option>
                @endforelse
            </select>

            @error('instractor_id')
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
        <div class="form-group mb-3">
            <label for="the-file">@lang('app.image')</label>
            <input type="file" id="the-file" class="form-control-file" wire:model="image">
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

    <div class="col-md-6 mb-4">
        @if ($image != '')
        {{-- <img src="{{ $image->temporaryUrl() }}" width="100" height="100"> --}}
        @else
        <img src="{{ $image_preview }}" width="100" height="100">
        @endif
    </div>

    <div class="col-md-6">
        <hr>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12">
                <div class="form-group no-margin">
                    <div class="form-group mb-3">
                        <label for="the-file">@lang('app.book')</label>
                        <input type="file" id="the-file" class="form-control-file" wire:model="file">
                        <h4 class="text-purple" wire:loading wire:target="file">
                            <progress max="100" x-bind:value="progress"></progress>
                        </h4>
                        {{-- <h5>
                            @if (File::extension(getFile($book, 'file')) == 'pdf')
                                <a href="{{ getFile($book, 'file') }}" target="_blank">
                        {{ parsePath(getFile($book, 'file')) }}
                        </a>
                        @else
                        @endif

                        </h5>
                        @error('file')
                        <p class="text-danger lead fz-16">
                            {{ $message }}
                        </p>
                        @enderror --}}
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center">
                {{-- <div>
                                        <p class="text-center">@lang('app.new')</p>
                                        <img id="output" src="{{ $image_preview }}" class="border border-secondary"
                width="100" height="100" wire:ignore>
            </div> --}}

        </div>
    </div>
    <hr>
</div>
<div class="col-md-6">
    @if (File::extension(getFile($book,'file')) == 'pdf')
    <a href="{{ getFile($book,'file') }}" target="_blank">
        <img src="{{ asset('images/file-pdf.png') }}" class="border " width="100" height="100">
    </a>
    @else
    <img src="{{ asset('images/file-pdf-empty.png') }}" class="border" width="100" height="100">
    @endif

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
    <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4" wire:click="update">@lang('app.update')</button>
    <hr>
    @include('alerts')
</div>

</div>
