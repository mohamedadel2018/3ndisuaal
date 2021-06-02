<x-slot name="pageTitle">@lang('app.reads')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.reads') }}">@lang('app.read')</a></li>
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
                        @lang('app.categories')
                    </th>
                    <th>
                       <a href="{{ route('admin.readcat',[$read->readCat->id]) }}" class="text-purple"> {{ $read->readCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sub_categories')
                    </th>
                    <th>
                       <a href="{{ route('admin.readsubcat',[$read->readSubCat->id]) }}" class="text-purple"> {{ $read->readSubCat->translate('name') }}</a>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.country')
                    </th>
                    <th>
                       <a href="{{ route('admin.country',[$read->country->id]) }}" class="text-purple"> {{ $read->country->translate('name') }}</a>
                    </th>
                </tr>
                {{-- <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.program')
                    </th>
                    <th>
                       <a href="{{ route('admin.program',[$read->program->id]) }}" class="text-purple"> {{ $read->program->translate('title') }}</a>
                    </th>
                </tr> --}}
                {{-- <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.level')
                    </th>
                    <th>
                       <a href="{{ route('admin.level',[$read->level->id]) }}" class="text-purple"> {{ $read->level->translate('name') }}</a>
                    </th>
                </tr> --}}

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.name')
                    </th>
                    <th>
                        {{ $read->name }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.phone')
                    </th>
                    <th>
                        {{ $read->phone }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.email')
                    </th>
                    <th>
                        {{ $read->email }}
                    </th>
                </tr>
                {{-- <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.id_number')
                    </th>
                    <th>
                        {{ $read->id_number }}
                    </th>
                </tr> --}}
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.type')
                    </th>
                    <th>
                        {{ $read->type ==  1 ? __('app.male') : __('app.female')}}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.good_time')
                    </th>
                    <th>
                        {{ $read->good_time }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $read->created_at }}
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
