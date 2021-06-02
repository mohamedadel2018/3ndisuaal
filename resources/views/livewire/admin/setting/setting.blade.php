<x-slot name="pageTitle">@lang('app.settings')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.settings') }}">@lang('app.settings')</a></li>
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
                        @lang('app.title')
                    </th>
                    <th class="font-20">
                        <h1>{{ $setting->translate('meta_title') }}</h1>
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th class="font-20">
                        <h1>{{ $setting->translate('meta_descrption') }}</h1>
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.video')
                    </th>
                    <th class="font-20">
                        <a class="text-purple" href="https://www.youtube.com/watch?v={{ $setting->translate('video') }}"
                            target="_blank">
                            {{ $setting->translate('video') }}</a>
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.home_cover')
                    </th>
                    <th class="font-20">
                        @if ($setting->home_cover == 1)
                        <h3>@lang('app.video')</h3>
                        @else
                        <h3>@lang('app.slider')</h3>
                        @endif
                    </th>
                </tr>



                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $setting->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $setting->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
