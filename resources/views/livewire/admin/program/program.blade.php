<x-slot name="pageTitle">@lang('app.programs')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.programs') }}">@lang('app.programs')</a></li>
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
                        @lang('app.video')
                    </th>
                    <th>
                       <a class="text-purple" href="https://www.youtube.com/watch?v={{ $program->translate('video') }}"
                        target="_blank">{{ $program->translate('video') }}</a>
                    </th>
                </tr>


                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.playlist')
                    </th>
                    <th>
                        {{ $program->playlist->translate('name') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.title')
                    </th>
                    <th>
                        {{ $program->translate('title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.video')
                    </th>
                    <th>
                        {{ $program->translate('video') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.sound')
                    </th>
                    <th>
                        {{ $program->translate('sound') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.description')
                    </th>
                    <th>
                        {{ $program->translate('about') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_title')
                    </th>
                    <th>
                        {{ $program->translate('meta_title') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th>
                        {{ $program->translate('meta_description') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $program->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $program->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
