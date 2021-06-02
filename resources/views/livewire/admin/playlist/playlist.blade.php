<x-slot name="pageTitle">@lang('app.playlists')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.playlists') }}">@lang('app.playlists')</a></li>
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
                        {{ $playlist->programCat->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sub_category')
                    </th>
                    <th>
                        {{ $playlist->programSubCat->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.instractor')
                    </th>
                    <th>
                        {{ $playlist->instractor->translate('name') }}
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.name')
                    </th>
                    <th>
                        {{ $playlist->translate('name') }}
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.video')
                    </th>
                    <th>
                        {{ $playlist->translate('video') }}
                    </th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>@lang('app.is_featured')</th>
                    <th>
                        @if ($playlist->is_featured)
                            <i class="fas fa-check-square fa-2x text-success"></i>
                        @else
                            <i class="fas fa-check-square fa-2x text-secondary"></i>
                        @endif
                    </th>

                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $playlist->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $playlist->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
