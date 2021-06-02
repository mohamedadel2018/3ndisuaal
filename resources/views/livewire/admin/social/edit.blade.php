<x-slot name="title">@lang('app.dashboard') | @lang('app.socials')</x-slot>
<x-slot name="pageTitle">@lang('app.socials')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.socials') }}">@lang('app.socials')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.icon') ||| <a href="https://fontawesome.com/icons?d=gallery&p=2" target="_blank">@lang('app.icons_website')</a></label>
            <input type="text" wire:model="icon" class="form-control">
            @error('icon')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.link_ar')</label>
            <input type="text" wire:model="link_ar" class="form-control">
            @error('link_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.link_en')</label>
            <input type="text" wire:model="link_en" class="form-control">
            @error('link_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.link_id')</label>
            <input type="text" wire:model="link_id" class="form-control">
            @error('link_id')
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
