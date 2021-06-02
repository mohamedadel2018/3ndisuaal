<x-slot name="title">@lang('app.dashboard') | @lang('app.slider')</x-slot>
<x-slot name="pageTitle">@lang('app.slider')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.sliders') }}">@lang('app.slider')</a></li>
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
                      <a href="{{ getFile($slider,'default') }}" target="_blank">
                            <img src="{{ getFile($slider,'default') }}" class="border " width="100" height="100">
                        </a>
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.video')
                    </th>
                    <th>
                       <a class="text-purple"
                            href="https://www.youtube.com/watch?v={{ $slider->translate('video') }}"
                            target="_blank">{{ $slider->translate('video') }}</a>
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.viewed')
                    </th>
                    <th>
                       {{ $slider->is_video == 1 ? __('app.video') : __('app.image') }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $slider->created_at }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.added_by')
                    </th>
                    <th>
                        <a href="#" class="text-purple">{{ $slider->admin->name }}</a>
                    </th>
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
