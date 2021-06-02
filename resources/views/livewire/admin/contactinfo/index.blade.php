<x-slot name="title">@lang('app.dashboard') | @lang('app.contact_info')</x-slot>
<x-slot name="pageTitle">@lang('app.contact_info')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.contact_info')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
        @if (admin()->can('contact.info.create'))
            <a href="{{ route('admin.contactinfo.create') }}" class="btn btn-success waves-effect waves-light">
                <i class="la la-pencil-square-o"></i>
            </a>
        @endif
        <div class="form-group" style="margin-bottom:0;">
            {{-- <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')"> --}}
        </div>
    </div>
    <hr>
    @include('alerts')
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.email')</th>
                    <th>@lang('app.phone')</th>
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contactInfos as $contactInfo)
                    <tr>
                        <th scope="row">{{ $contactInfo->id }}</th>
                        <th scope="row">
                            {!! nl2br($contactInfo->email) !!}
                        </th>
                        <th scope="row">
                            {!! nl2br($contactInfo->phone) !!}
                        </th>

                        <th>
                            @if (admin()->can('contact.info.edit'))
                                <a href="{{ route('admin.contactinfo.edit', [$contactInfo->id]) }}"
                                    title="@lang('app.edit')" class="btn btn-primary waves-effect waves-light edit-btn">
                                    <i class="la la-edit fz-16"></i>
                                </a>
                            @endif
                            @if (admin()->can('contact.info.view'))
                                <a href="{{ route('admin.contactinfo.show', [$contactInfo->id]) }}"
                                    title="@lang('app.details')"
                                    class="btn btn-warning waves-effect waves-dark text-black-50">
                                    <i class="mdi mdi-eye-circle fz-18"></i>
                                </a>
                            @endif
                            @if (admin()->can('contact.info.delete'))
                                <button title="@lang('app.delete')" type="button"
                                    class="btn btn-danger waves-effect waves-dark delete-btn"
                                    onclick="deleteConfirmation({{ $contactInfo->id }})">
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
            {{ $contactInfos->links() }}
        </div>
    </div>
</div>
@push('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(e) {

        })

        function deleteConfirmation(id) {
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
                    Livewire.emit('delete', id);
                }
            })
        }

    </script>
@endpush
