<x-slot name="title">@lang('app.dashboard') | @lang('app.admins')</x-slot>
<x-slot name="pageTitle">@lang('app.admins')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.admin.index') }}">@lang('app.admins')</a></li>
    <li class="breadcrumb-item active">@lang('app.edit')</li>
</x-slot>
<div class="row w-100">
    <div class="col-md-12">
        @include('alerts')
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.name')</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.username')</label>
            <input type="text" wire:model="username" class="form-control">
            @error('username')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.email')</label>
            <input type="text" wire:model="email" class="form-control">
            @error('email')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.password')</label>
            <input type="text" wire:model="password" class="form-control">
            @error('password')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('app.roles')</label>
            <select class="form-control" wire:model="role_id">
                <option value="-1">@lang('app.roles')</option>
                @forelse ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->translate('label') }}</option>
               @empty

               @endforelse
            </select>

            @error('role_id')
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
    </div>
</div>
