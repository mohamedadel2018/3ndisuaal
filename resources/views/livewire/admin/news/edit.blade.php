<x-slot name="title">@lang('app.dashboard') | @lang('app.news')</x-slot>
<x-slot name="pageTitle">@lang('app.news')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.news') }}">@lang('app.news')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')


    <div class="col-md-12">
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
    <div class="col-md-12">
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

    <div class="col-md-12">
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



    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="update">@lang('app.update')</button>
        <hr>
        @include('alerts')
    </div>

</div>
