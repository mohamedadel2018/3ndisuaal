<x-slot name="pageTitle">@lang('app.book_sub_cats')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.booksubcats') }}">@lang('app.book_sub_cats')</a></li>
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
                            href="{{ route('admin.bookcat',[$bookSubCat->bookCat->id]) }}">{{ $bookSubCat->bookCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.name')
                    </th>
                    <th>
                        {{ $bookSubCat->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $bookSubCat->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                       <a href="#" class="text-purple"> {{ $bookSubCat->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
