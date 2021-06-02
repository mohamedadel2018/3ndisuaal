<x-slot name="title">@lang('app.dashboard') | @lang('app.programs')</x-slot>
<x-slot name="pageTitle">@lang('app.programs')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.programsubcats') }}">@lang('app.programs')</a></li>
    <li class="breadcrumb-item active">@lang('app.edit')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')

    <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('app.category')</label>
                <select class="form-control" wire:model="program_cat_id">
                    <option value="-1">@lang('app.category')</option>
                    @forelse ($programCats as $programCat)
                    <option value="{{ $programCat->id }}">{{ $programCat->translate('name') }}</option>
                    @empty
                    <option>@lang('app.data_not_found')</option>
                    @endforelse
                </select>

                @error('program_cat_id')
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
    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="update">@lang('app.update')</button>
        <hr>
        @include('alerts')
    </div>

</div>
