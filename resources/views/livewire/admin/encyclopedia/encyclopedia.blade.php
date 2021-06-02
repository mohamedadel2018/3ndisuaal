<x-slot name="pageTitle">@lang('app.encyclopedia')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.encyclopedias') }}">@lang('app.encyclopedia')</a></li>
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
                        <a class="text-purple"
                            href="{{ route('admin.encyclopediacat', [$encyclopedia->encyclopediaCat->id]) }}">{{ $encyclopedia->encyclopediaCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sub_category')
                    </th>
                    <th>
                        <a class="text-purple"
                            href="{{ route('admin.encyclopediasubcat', [$encyclopedia->encyclopediaSubCat->id]) }}">{{ $encyclopedia->encyclopediaSubCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.question')
                    </th>
                    <th>
                        {{ $encyclopedia->translate('question') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.answer')
                    </th>
                    <th>
                        {{ $encyclopedia->translate('answer') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.file')
                    </th>
                    <th>
                        @if (File::extension(getFile($encyclopedia, 'default')) == 'pdf')
                            <a href="{{ getFile($encyclopedia, 'default') }}" target="_blank">
                                <img src="{{ asset('images/file-pdf.png') }}" class="border " width="80" height="80">
                            </a>
                        @else
                            <img src="{{ asset('images/file-pdf-empty.png') }}" class="border" width="100"
                                height="100">
                        @endif
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_title')
                    </th>
                    <th>
                        {{ $encyclopedia->translate('meta_title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th>
                        {{ $encyclopedia->translate('meta_description') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $encyclopedia->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $encyclopedia->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
