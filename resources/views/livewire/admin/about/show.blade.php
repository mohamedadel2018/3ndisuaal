<x-slot name="pageTitle">@lang('app.about_us')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">@lang('app.about_us')</a></li>
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
                        @lang('app.about_us')
                    </th>
                    <th class="font-20">
                        {{ $about->translate('about') }}
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.our_vision')
                    </th>
                    <th class="font-20">
                        {{ $about->translate('our_vision') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.our_goals')
                    </th>
                    <th class="font-20">
                        {{ $about->translate('our_goals') }}
                    </th>
                </tr>


                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_title')
                    </th>
                    <th class="font-20">
                        {{ $about->translate('meta_title') }}
                    </th>
                </tr>

    <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.meta_description')
                    </th>
                    <th class="font-20">
                        {{ $about->translate('meta_descrption') }}
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $about->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $about->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
