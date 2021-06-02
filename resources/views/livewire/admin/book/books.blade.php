<x-slot name="title">@lang('app.dashboard') | @lang('app.book')</x-slot>
<x-slot name="pageTitle">@lang('app.book')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.book')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
        @if (admin()->can('book.create'))
            <a href="{{ route('admin.book.create') }}" class="btn btn-success waves-effect waves-light">
                <i class="la la-pencil-square-o"></i>
            </a>
        @endif
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')">
        </div>
    </div>
    <hr>
    {{-- @include('livewire.admin.book.create') --}}
    @include('alerts')
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.image')</th>
                    <th>@lang('app.book')</th>
                    <th>@lang('app.category')</th>
                    <th>@lang('app.sub_category')</th>
                    <th>@lang('app.title')</th>
                    @if (admin()->can('book.feature'))
                        <th>@lang('app.is_featured')</th>
                    @endif
                    <th>@lang('app.views')</th>
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <th scope="row d-flex justify-content-center align-items-center">
                            <a href="{{ getFile($book, 'default') }}" target="_blank">
                                <img src="{{ getFile($book, 'default') }}" class="border " width="80" height="80">
                            </a>
                        </th>
                        <th scope="row">
                            @if (File::extension(getFile($book, 'file')) == 'pdf')
                                <a href="{{ getFile($book, 'file') }}" target="_blank">
                                    <img src="{{ asset('images/file-pdf.png') }}" class="border " width="80"
                                        height="80">
                                </a>
                            @else
                                <img src="{{ asset('images/file-pdf-empty.png') }}" class="border" width="100"
                                    height="100">
                            @endif
                        </th>
                        <th scope="row">{{ $book->bookCat->translate('name') }}</th>
                        <th scope="row">{{ $book->bookSubCat->translate('name') }}</th>
                        <th scope="row">{{ $book->translate('title') }}</th>
                        @if (admin()->can('book.feature'))
                            <th scope="row">
                                @if ($book->is_featured)
                                    <a href="javascript:void(0);"
                                        wire:click.prevent="setFeatured(0,{{ $book->id }})">
                                        <i class="fas fa-check-square fa-2x text-success"></i>
                                    </a>
                                @else
                                    <a href="javascript:void(0);"
                                        wire:click.prevent="setFeatured(1,{{ $book->id }});">
                                        <i class="fas fa-check-square fa-2x text-secondary"></i>
                                    </a>
                                @endif
                            </th>
                        @endif
                        <th scope="row">{{ $book->views }}</th>
                        <th>
                            @if (admin()->can('book.edit'))
                                <a href="{{ route('admin.book.edit', [$book->id]) }}" title="@lang('app.edit')"
                                    class="btn btn-primary waves-effect waves-light edit-btn">
                                    <i class="la la-edit fz-16"></i>
                                </a>
                            @endif
                            @if (admin()->can('book.view'))
                                <a href="{{ route('admin.book', [$book->id]) }}" title="@lang('app.details')"
                                    class="btn btn-warning waves-effect waves-dark text-black-50">
                                    <i class="mdi mdi-eye-circle fz-18"></i>
                                </a>
                            @endif
                            @if (admin()->can('book.delete'))
                                <button title="@lang('app.delete')" type="button"
                                    class="btn btn-danger waves-effect waves-dark delete-btn"
                                    onclick="deleteConfirmation({{ $book->id }})">
                                    {{-- wire:click="delete({{ $book->id }})" --}}
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
            {{ $books->links() }}
        </div>
    </div>
</div>
@push('js')
    <script type="text/javascript">
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
