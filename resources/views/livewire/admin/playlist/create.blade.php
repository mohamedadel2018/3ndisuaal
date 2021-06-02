<x-slot name="title">@lang('app.dashboard') | @lang('app.playlists')</x-slot>
<x-slot name="pageTitle">@lang('app.playlists')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.playlists') }}">@lang('app.playlists')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.categories')</label>
            <select class="form-control" wire:model="selectedState">
                <option value="">@lang('app.categories')</option>
                @forelse ($programCats as $programCat)
                    <option value="{{ $programCat->id }}">{{ $programCat->translate('name') }}</option>
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
            <select class="form-control" wire:model="program_sub_cat_id">
                <option value="-1">@lang('app.choose_sub_categories')</option>
                @forelse ($programSubCats as $programSC)
                    <option value="{{ $programSC->id }}">
                        {{ $programSC->translate('name') }}
                    </option>
                @empty
                @endforelse
            </select>

            @error('program_sub_cat_id')
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
            <label for="field-1" class="control-label">@lang('app.name_ar')</label>
            <input type="text" wire:model="name_ar" class="form-control">
            @error('name_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-6">
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

    <div class="col-md-6">
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
                            <label for="field-1" class="control-label">@lang('app.is_featured')</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"  wire:model="is_featured" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                            @error('is_featured')
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
