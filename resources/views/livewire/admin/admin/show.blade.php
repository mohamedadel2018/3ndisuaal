<x-slot name="pageTitle">@lang('app.admins')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.admin.index') }}">@lang('app.admins')</a></li>
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
                    <th class="font-20">
                        <h4>{{ $admin->name }}</h4>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.username')
                    </th>
                    <th class="font-20">
                        <h4>{{ $admin->username }}</h4>
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.email')
                    </th>
                    <th class="font-20">
                        <h4>{{ $admin->email }}</h4>
                    </th>
                </tr>





                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $admin->created_at }}
                    </th>
                </tr>


            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
