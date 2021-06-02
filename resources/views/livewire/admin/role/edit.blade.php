<x-slot name="title">@lang('app.dashboard') | @lang('app.roles')</x-slot>
<x-slot name="pageTitle">@lang('app.roles')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">@lang('app.roles')</a></li>
    <li class="breadcrumb-item active">@lang('app.edit')</li>
</x-slot>
<div class="row w-100">
    <div class="col-md-12">
        @include('alerts')
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name_ar')</label>
            <input type="text" wire:model="label_ar" class="form-control">
            @error('label_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name_en')</label>
            <input type="text" wire:model="label_en" class="form-control">
            @error('label_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    @forelse ($permationFors as $permationFor)
        <div class="col-sm-12">
            <h3 class="text-center bg-dark p-1 text-light mt-3">{{ $permationFor->translate('name') }}</h3>
            @error('permationFromUpdating')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class=" w-100 row d-flex align-items-center justify-content-center mt-3 ">

            @forelse ($permationFor->permations as $permation)
                <div class="col-md-3 text-center mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck-{{ $permation->id }}"
                            value="{{ $permation->id }}" @if (in_array($permation->id, $permationFromUpdating)) checked @endif wire:click="updatePermationArray({{ $permation->id }})">
                        <label class="custom-control-label m"
                            for="customCheck-{{ $permation->id }}">&nbsp;&nbsp;{{ $permation->translate('label') }}</label>
                    </div>
                </div>
            @empty

            @endforelse

            <hr>
        </div>
    @empty
        @lang('app.data_not_found')
    @endforelse

    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="update">@lang('app.update')</button>
        <hr>
    </div>
    <div class="col-12 mt-3">
        @include('alerts')
    </div>
</div>
