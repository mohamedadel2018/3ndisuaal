<x-slot name="title">@lang('app.dashboard') | @lang('app.questions')</x-slot>
<x-slot name="pageTitle">@lang('app.questions')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.questions') }}">@lang('app.questions')</a></li>
    <li class="breadcrumb-item active">@lang('app.details')</li>
</x-slot>
<div class="w-100">

    <hr>
    <div class="table-responsive">
        <table class="table mb-0 table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('app.name')</th>
                    <th>@lang('app.value')</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.category')
                    </th>
                    <th>
                        {{ $question->encyclopediaCat->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sub_category')
                    </th>
                    <th scope="row">{{ $question->encyclopediaSubCat->translate('name') }}</th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.email')
                    </th>
                    <th scope="row" class="for-icon">{{ $question->email }}</th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.question')
                    </th>
                    <th scope="row" class="for-icon">{{ $question->question }}</th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.question_code')
                    </th>
                    <th scope="row" class="for-icon">{{ $question->code }}</th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.answer')
                    </th>
                    <th scope="row" class="for-icon">{{ $question->answer }}</th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $question->created_at }}
                    </th>
                </tr>


            </tbody>
        </table>
        <hr>
        <h2 class="text-center bg-success text-light p-2 mt-5">@lang('app.the_answer')</h2>
        <div class="col-md-12">
            @include('alerts')
            <div class="form-group no-margin">
                <label for="field-7" class="control-label">@lang('app.answer')</label>
                <textarea class="form-control" id="field-7" wire:model="answer"></textarea>
                @error('answer')
                    <p class="text-danger lead fz-16">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="col-md-12 text-center p-3">
            <button type="button" class="btn btn-purple btn-lg waves-effect waves-light"  wire:loading.attr="disabled"
                wire:click.prevent="saveAnswer({{ $question->id }})">@lang('app.save')</button>
        </div>
    </div>
</div>
<hr>
