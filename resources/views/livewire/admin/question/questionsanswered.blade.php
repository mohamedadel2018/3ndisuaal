<x-slot name="title">@lang('app.dashboard') | @lang('app.answered_questions')</x-slot>
<x-slot name="pageTitle">@lang('app.answered_questions')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item active">@lang('app.answered_questions')</li>
</x-slot>
<div class="w-100">
    <div class="d-flex justify-content-between align-items-center">
        <div class="form-group" style="margin-bottom:0;">
            <input type="text" id="simpleinput" class="form-control" wire:model.debounce.250ms="term"
                placeholder="@lang('app.search')">
        </div>
        <div>
            <a href="{{ route('admin.questions') }}" class="btn btn-success waves-effect waves-light font-weight-bold font-16">
               @lang('app.questions')
            </a>
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
                    <th>@lang('app.question')</th>
                    <th>@lang('app.actions')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($questions as $question)
                    <tr>
                        <th scope="row">{{ $question->id }}</th>
                        <th scope="row">{{ $question->encyclopediaCat->translate('name') }}</th>
                        <th scope="row">{{ $question->encyclopediaSubCat->translate('name') }}</th>
                        <th scope="row" class="for-icon">{{ $question->question }}</th>

                        <th>

                            <a href="{{ route('admin.question', [$question->id]) }}" title="@lang('app.details')"
                                class="btn btn-warning waves-effect waves-dark text-black-50">
                                <i class="mdi mdi-eye-circle fz-18"></i>
                            </a>
                            <button title="@lang('app.delete')" type="button"
                                class="btn btn-danger waves-effect waves-dark delete-btn"
                                onclick="deleteConfirmation({{ $question->id }})">
                                <i class="la la-times-circle fz-18"></i>
                            </button>

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
            {{ $questions->links() }}
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
