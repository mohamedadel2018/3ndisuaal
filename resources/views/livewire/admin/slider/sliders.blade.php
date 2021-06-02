<x-slot name="title">@lang('app.dashboard') | @lang('app.sliders')</x-slot>
<x-slot name="pageTitle">@lang('app.sliders')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.sliders')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
        @if (admin()->can('slider.create'))
            <a href="{{ route('admin.slider.create') }}" class="btn btn-success waves-effect waves-light">
                <i class="la la-pencil-square-o"></i>
            </a>
        @endif
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')">
        </div>
    </div>
    <hr>
    {{-- @include('livewire.admin.slider.edit') --}}
    {{-- @include('livewire.admin.slider.create') --}}
    @include('alerts')
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.image')</th>
                    <th>@lang('app.video')</th>
                    <th>@lang('app.viewed')</th>
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sliders as $slider)
                <tr>
                    <th scope="row">{{ $slider->id }}</th>
                     <th scope="row">
                        <img src="{{ getFile($slider,'default') }}" class="border border" width="100" height="100">
                    </th>
                    <th scope="row"><a class="text-purple"
                            href="https://www.youtube.com/watch?v={{ $slider->translate('video') }}"
                            target="_blank">{{ $slider->translate('video') }}</a></th>


                    <th scope="row">
                       {{ $slider->is_video == 1 ? __('app.video') : __('app.image') }}
                    </th>

                    <th>
                        @if (admin()->can('slider.edit'))
                            <a href="{{ route('admin.slider.edit',[$slider->id]) }}" title="@lang('app.edit')" type="button"
                                class="btn btn-primary waves-effect waves-light">
                                <i class="la la-edit fz-16"></i>
                            </a>
                        @endif
                       @if (admin()->can('slider.view'))
                            <a href="{{ route('admin.slider',[$slider->id]) }}" title="@lang('app.details')"
                                class="btn btn-warning waves-effect waves-dark text-black-50">
                                <i class="mdi mdi-eye-circle fz-18"></i>
                            </a>
                       @endif
                       @if (admin()->can('slider.delete'))
                            <button title="@lang('app.delete')" type="button"
                                class="btn btn-danger waves-effect waves-dark delete-btn"
                                onclick="deleteConfirmation({{ $slider->id }})">
                                {{-- wire:click="delete({{ $slider->id }})" --}}
                                <i class="la la-times-circle fz-18"></i>
                            </button>
                       @endif

                    </th>
                </tr>
                @empty
                <div class="alert alert-info text-center">
                    <strong><i class="la la-database"></i></strong>
                    @lang('app.data_not_found')
                </div>
                @endforelse

            </tbody>
        </table>
        <hr>
        <div class="col-12 d-flex justify-content-center align-items-center">
            {{ $sliders->links() }}
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    function deleteConfirmation(id){
Swal.fire({
title: "{!! __('app.confirm_title') !!}",
text: "{!! __('app.confirm_message') !!}",
icon: 'warning',
showCancelButton: true,
cancelButtonText: "{!! __('app.cancle') !!}",
confirmButtonColor: '#645bb1',
cancelButtonColor: '#d33',
confirmButtonText: "{!! __('app.delete') !!}"
}).then((result) => {
if (result.isConfirmed) {
    Livewire.emit('delete',id);
}
})
}
</script>
@endpush
