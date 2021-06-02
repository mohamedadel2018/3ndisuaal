<x-slot name="pageTitle">@lang('app.books')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.books') }}">@lang('app.books')</a></li>
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
                        @lang('app.book')
                    </th>
                    <th>
                      <a href="{{ getFile($book,'default') }}" target="_blank">
                            <img src="{{ getFile($book,'default') }}" class="border " width="100" height="100">
                        </a>
                    </th>
                </tr>


                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.book')
                    </th>
                    <th>
                      @if (File::extension(getFile($book,'file')) == 'pdf')
                        <a href="{{ getFile($book,'file') }}" target="_blank">
                            <img src="{{ asset('images/file-pdf.png') }}" class="border " width="100" height="100">
                        </a>
                        @else
                        <img src="{{ asset('images/file-pdf-empty.png') }}" class="border" width="100" height="100">
                        @endif
                    </th>
                </tr>



                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.category')
                    </th>
                    <th>
                        <a class="text-purple" target="_blank" href="{{ route('admin.bookcat',[$book->bookCat->id]) }}">
                            {{ $book->bookCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sub_category')
                    </th>
                    <th>
                        <a class="text-purple" target="_blank" href="{{ route('admin.booksubcat',[$book->bookSubCat->id]) }}">
                            {{ $book->bookSubCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.instractor')
                    </th>
                    <th>
                       <a class="text-purple" target="_blank" href="{{ route('admin.instractor',[$book->instractor->id]) }}"> {{ $book->instractor->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.title')
                    </th>
                    <th>
                        {{ $book->translate('title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.description')
                    </th>
                    <th>
                        {{ $book->translate('about') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_title')
                    </th>
                    <th>
                        {{ $book->translate('meta_title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th>
                        {{ $book->translate('meta_description') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $book->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $book->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
