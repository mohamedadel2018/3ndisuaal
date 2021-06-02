<x-slot name="title">@lang('app.dashboard') | @lang('app.programs')</x-slot>
<x-slot name="pageTitle">@lang('app.programs')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.programs')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
     @if (admin()->can('program.create'))
            <a href="{{ route('admin.program.create') }}" class="btn btn-success waves-effect waves-light" >
                <i class="la la-pencil-square-o"></i>
            </a>
     @endif
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')">
        </div>
    </div>
    <hr>
    {{-- @include('livewire.admin.program.edit') --}}
    {{-- @include('livewire.admin.program.create') --}}
    @include('alerts')
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.playlist')</th>
                    <th>@lang('app.title')</th>
                    <th>@lang('app.video')</th>
                    <th>@lang('app.views')</th>
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($programs as $program)
                <tr>
                    <th scope="row">{{ $program->id }}</th>
                    <th scope="row">{{ $program->playlist->translate('name') }}</th>
                    <th scope="row">{{ $program->translate('title') }}</th>
                    <th scope="row"><a class="text-purple" href="https://www.youtube.com/watch?v={{ $program->translate('video') }}" target="_blank">{{ $program->translate('video') }}</a></th>
                    <th scope="row">{{ $program->views }}</th>
                    <th>
                        @if (admin()->can('program.edit'))
                            <a href="{{ route('admin.program.edit',[$program->id]) }}"  title="@lang('app.edit')" type="button"
                                class="btn btn-primary waves-effect waves-light edit-btn">
                                <i class="la la-edit fz-16"></i>
                            </a>
                        @endif
                      @if (admin()->can('program.view'))
                            <a href="{{ route('admin.program',[$program->id]) }}" title="@lang('app.details')"
                                class="btn btn-warning waves-effect waves-dark text-black-50">
                                <i class="mdi mdi-eye-circle fz-18"></i>
                            </a>
                      @endif
                       @if (admin()->can('program.delete'))
                            <button title="@lang('app.delete')" type="button"
                                class="btn btn-danger waves-effect waves-dark delete-btn"
                                onclick="deleteConfirmation({{ $program->id }})">
                                {{-- wire:click="delete({{ $program->id }})" --}}
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
            {{ $programs->links() }}
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
