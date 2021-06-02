<x-slot name="title">@lang('app.dashboard') | @lang('app.slider')</x-slot>
<x-slot name="pageTitle">@lang('app.slider')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.sliders') }}">@lang('app.slider')</a></li>
    <li class="breadcrumb-item active">@lang('app.create')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')
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

       <div class="col-md-7">
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
    <div class="col-md-5">
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="100" height="100">
        @endif
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('app.viewed')</label>
            <select class="form-control" wire:model="is_video">
                <option value="-1">@lang('app.viewed')</option>
                <option value="0">@lang('app.image')</option>
                <option value="1">@lang('app.video')</option>
            </select>

            @error('is_video')
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
@push('js')
<script>
    window.addEventListener('load',e => {
    });

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
    }
    };
</script>
@endpush
