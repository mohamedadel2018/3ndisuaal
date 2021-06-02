<x-slot name="pageTitle">@lang('app.contact')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.contact.index') }}">@lang('app.messages')</a></li>
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
                        {{ $contact->name }}
                    </th>
                </tr>

                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.email')
                    </th>
                    <th class="font-20">
                        {{ $contact->email }}
                    </th>
                </tr>
                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.message')
                    </th>
                    <th class="font-20">
                        {{ $contact->message }}
                    </th>
                </tr>




                <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.created_at')
                    </th>
                    <th>
                        {{ $contact->created_at }}
                    </th>
                </tr>
                {{-- <tr>
                    <th scope="row">#</th>
                    <th>
                        @lang('app.is_read')
                    </th>
                    <th>
                       @if ($contact->is_read == 2)
                            <h3 class="text-success">@lang('app.yas')</h3>
                            @else
                            <h3 class="text-danger">@lang('app.no')</h3>
                       @endif
                    </th> --}}
                </tr>

            </tbody>
        </table>
        <hr>

    </div>
</div>
<hr>
