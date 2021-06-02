<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats') | @lang('app.encyclopedia')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats_meta_description')</x-slot>
<x-slot name="og_title">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats')</x-slot>
<x-slot name="og_description">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats_meta_description')</x-slot>
<x-slot name="og_url">{{ Request::url() }}</x-slot>
<x-slot name="twitter_title">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats')</x-slot>
<x-slot name="twitter_description">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats_meta_description')</x-slot>
<x-slot name="twitter_site">{{ Request::url() }}</x-slot>
    @lang('app.encyclopedia')</x-slot>
@push('css')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=606a1c6dae08f90011442c0e&product=inline-share-buttons"
        async="async"></script>
@endpush
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
         {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-yellow-600 to-yellow-400 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-800">
                    @lang('app.encyclopedia_questions_details')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/mawsoo3a.png') }}" alt="encyclopedia" class="w-full h-60"
                        alt="@lang('app.website_name')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1 class="border-right-yellow p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300 mt-6">
                : &nbsp; <a
                    href="javascript:void(0);" class="text-yellow-700">{{ $encyclopedia->translate('question') }}</a>
                <strong class=" font-bold text-yellow mx-4">
                    < </strong>
                 &nbsp; <a
                    href="{{ route('encyclopedia.by.subcat', [$encyclopedia->encyclopedia_sub_cat_id]) }}" class="hover:text-yellow-700">{{ $encyclopedia->encyclopediaSubCat->translate('name') }}</a>
                <strong class=" font-bold text-yellow mx-4">
                    < </strong>
                        &nbsp; <a
                            href="{{ route('encyclopedias', [$encyclopedia->encyclopediaCat->id]) }}" class="hover:text-yellow-700">{{ $encyclopedia->encyclopediaCat->translate('name') }}</a>
                        <strong class=" font-bold text-yellow mx-4">
                            < </strong>
                                <a href="{{ route('encyclopedia.cat') }}"
                                    class="hover:text-yellow-700">@lang('app.encyclopedia_cats')</a>
                                <strong class=" font-bold text-yellow mx-4">
                                    < </strong>
                                        <a href="{{ url('/') }}"
                                            class="hover:text-yellow-700">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
            <div class="w-2/6  p-5">
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400 shadow-md">
                        <h3 class="p-3 text-center rounded bg-yellow-500 text-black font-bold">
                            @lang('app.sub_categories')</h3>
                        <ul>
                            @forelse ($encyclopediasSubCats as $encyclopediasSubCat)
                                <a href="{{ route('encyclopedia.by.subcat', [$encyclopediasSubCat->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-yellow-100 hover:text-yellow-900 flex justify-end items-center hover:border-yellow-300">
                                        {{ $encyclopediasSubCat->translate('name') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 ">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </li>
                                </a>
                            @empty
                                @lang('app.data_not_found')
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400  shadow-md">
                        <h3 class="p-3 text-center rounded bg-yellow-500 text-black font-bold">
                            @lang('app.categories')</h3>
                        <ul>
                            @forelse ($encyclopediaCats as $encyclopediaCat)
                                <a href="{{ route('encyclopedias', [$encyclopediaCat->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-yellow-100 hover:text-yellow-900 flex justify-end items-center hover:border-yellow-300">
                                        {{ $encyclopediaCat->translate('name') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 ">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </li>
                                </a>

                            @empty
                                @lang('app.data_not_found')
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-4/6  p-5">

                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <h4 class="bg-white border border-gray-300 px-5 py-2 shadow-lg flex justify-between items-center">
                        <div class="flex">
                            {{ $encyclopedia->views }} &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="sharethis-inline-share-buttons" data-url="{{ Request::url() }}"
                                    data-title="{{ $encyclopedia->translate('question') }}"
                                    data-image="{{ asset('images/logo-2-' . app()->getLocale() . '.png') }}"
                                    data-description="{{ $encyclopedia->translate('answer') }}"></div> &nbsp; @lang('app.share')
                            &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                        </div>
                    </h4>
                    <h1
                        class="border border-white text-black   bg-yellow-500 p-5 border-right-white rounded shadow-md text-xl font-bold my-1">
                        {{ $encyclopedia->translate('question') }}
                    </h1>

                    <div class="bg-white p-5 border border-gray-300 shadow-lg">
                        <p class="text-xl leading-10">
                            {{ $encyclopedia->translate('answer') }}
                        </p>
                        <hr>
                        <div class="flex justify-center items-center">
                            @if (File::extension(getFile($encyclopedia, 'default')) == 'pdf')
                                <a href="{{ getFile($encyclopedia, 'default') }}"
                                    class="my-5 bg-yellow-500 border border-yellow-600 px-7 py-2 rounded text-black font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-pdf ml-5"></i>
                                </a>
                            @else
                              <a href="javascript:void(0);"
                                    class="my-5 bg-yellow-200 px-7 py-2 rounded text-gray-400 border border-yellow-300 font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-pdf ml-5"></i>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
