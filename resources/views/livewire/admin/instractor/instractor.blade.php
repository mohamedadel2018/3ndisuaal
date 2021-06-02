<x-slot name="pageTitle">@lang('app.instractors')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.instractors') }}">@lang('app.instractors')</a></li>
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
                        @lang('app.image')
                    </th>
                    <th>
                       <img src="{{ getFile($instractor,'default') }}" class="border border" width="100" height="100">
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.word')
                    </th>
                    <th class="d-flex justify-content-center align-items-center">
                   @if (File::extension(getFile($instractor,'file')) == 'docx')
                    <a href="{{ getFile($instractor,'file') }}" target="_blank">
                        <div class="word-file-preview flex-column align-items-center justify-content-center">
                            <i class="la la-file la-3x"></i>
                            <p>word</p>
                        </div>
                    </a>
                    @endif
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.name')
                    </th>
                    <th>
                        {{ $instractor->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.instractor_about')
                    </th>
                    <th>
                        {{ $instractor->translate('about') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_title')
                    </th>
                    <th>
                        {{ $instractor->translate('meta_title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th>
                        {{ $instractor->translate('meta_description') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $instractor->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $instractor->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
