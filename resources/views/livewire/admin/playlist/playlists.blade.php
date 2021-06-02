<x-slot name="title">@lang('app.dashboard') | @lang('app.playlists')</x-slot>
<x-slot name="pageTitle">@lang('app.playlists')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.playlists')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
       @if (admin()->can('playlist.create'))
            <a href="{{ route('admin.playlist.create') }}" class="btn btn-success waves-effect waves-light">
                <i class="la la-pencil-square-o"></i>
            </a>
       @endif
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')">
        </div>
    </div>
    <hr>
    @include('alerts')
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.category')</th>
                    <th>@lang('app.sub_category')</th>
                    <th>@lang('app.name')</th>
                    <th>@lang('app.video')</th>
                   @if (admin()->can('playlist.feature'))
                        <th>@lang('app.is_featured')</th>
                   @endif
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($playlists as $playlist)
                    <tr>
                        <th scope="row">{{ $playlist->id }}</th>
                        <th scope="row">{{ $playlist->programCat->translate('name') }}</th>
                        <th scope="row">{{ $playlist->programSubCat->translate('name') }}</th>
                        <th scope="row">{{ $playlist->translate('name') }}</th>
                        <th scope="row">
                            <a class="text-purple"
                                href="https://www.youtube.com/watch?v={{ $playlist->translate('video') }}"
                                target="_blank">
                                {{ $playlist->translate('video') }}</a>
                        </th>
                       @if (admin()->can('playlist.feature'))
                            <th scope="row">
                                @if ($playlist->is_featured)
                                    <a href="javascript:void(0);" wire:click.prevent="setFeatured(0,{{ $playlist->id }})">
                                        <i class="fas fa-check-square fa-2x text-success"></i>
                                    </a>
                                @else
                                    <a href="javascript:void(0);" wire:click.prevent="setFeatured(1,{{ $playlist->id }});">
                                        <i class="fas fa-check-square fa-2x text-secondary"></i>
                                    </a>
                                @endif
                            </th>
                       @endif
                        <th>
                           @if (admin()->can('playlist.edit'))
                                <a href="{{ route('admin.playlist.edit', [$playlist->id]) }}" title="@lang('app.edit')"
                                    type="button" class="btn btn-primary waves-effect waves-light edit-btn">
                                    <i class="la la-edit fz-16"></i>
                                </a>
                           @endif
                            @if (admin()->can('playlist.view'))
                                <a href="{{ route('admin.playlist', [$playlist->id]) }}" title="@lang('app.details')"
                                    class="btn btn-warning waves-effect waves-dark text-black-50">
                                    <i class="mdi mdi-eye-circle fz-18"></i>
                                </a>
                            @endif
                           @if (admin()->can('playlist.delete'))
                                <button title="@lang('app.delete')" type="button"
                                    class="btn btn-danger waves-effect waves-dark delete-btn"
                                    onclick="deleteConfirmation({{ $playlist->id }})">
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
            {{ $playlists->links() }}
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
