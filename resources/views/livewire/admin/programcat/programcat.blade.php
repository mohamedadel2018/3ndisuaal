<x-slot name="pageTitle">@lang('app.programs') - @lang('app.categories')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.programcats') }}">@lang('app.program_cats')</a></li>
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
                        @lang('app.name')
                    </th>
                    <th>
                        {{ $programCat->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $programCat->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $programCat->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
<h3 class=" alert alert-warning font-weight-bold font-20 text-center d-block w-100 py-3 text-whit">
    <i class="la la-list-ul la-lg"></i>
    @lang('app.sub_categories')
</h3>
<div class="w-100">
    <ul class="list-group text-center d-flex justify-content-center">
        @forelse ($programSubCats as $programSubCat)
            <a class="list-group-item list-group-item-action font-17 font-weight-semibold" href="{{ route('admin.programsubcat',[$programSubCat->id]) }}">{{ $programSubCat->translate('name') }}</a>
        @empty
            <li class="list-group-item font-weight-semibold font-17 list-group-item-action cursor-pointer">@lang('app.data_not_found')
            </li>
        @endforelse
    </ul>
</div>
