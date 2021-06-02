<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats') | @lang('app.encyclopedia')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') @lang('app.encyclopedia_sub_cats_meta_description')
    @lang('app.encyclopedia')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
           {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-yellow-600 to-yellow-400 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-800">
                    @lang('app.encyclopedia_sub_cats_questions')
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
                : &nbsp; <a href="javascript:void(0);"
                    class="text-yellow-700">{{ $encyclopediaSubCat->translate('name') }}</a>
                <strong class=" font-bold text-yellow mx-4">
                    < </strong>
                        <a href="{{ route('encyclopedias', [$encyclopediaSubCat->encyclopediaCat->id]) }}"
                            class="hover:text-yellow-700">{{ $encyclopediaSubCat->encyclopediaCat->translate('name') }}</a>
                        <strong class=" font-bold text-yellow mx-4">
                            < </strong>
                        <a href="{{ route('encyclopedia.cat') }}"
                            class="hover:text-yellow-700">@lang('app.encyclopedia_cats')</a>
                        <strong class=" font-bold text-yellow mx-4">
                            < </strong>
                                <a href="{{ url('/') }}" class="hover:text-yellow-700">@lang('app.home')</a>
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

                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-4/6  p-5">
                <div class="flex justify-end align-center pt-4 pb-5">
                    <input type="text" placeholder="@lang('app.search')"
                        class="border text-right border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:shadow-lg px-2 py-2 rounded-md text-right shadow-md"
                        wire:model="search">
                </div>
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    @forelse ($encyclopedias as $encyclopedia)
                        <a href="{{ route('encyclopedia',[$encyclopedia->id,$encyclopedia->translate('slug')]) }}">
                            <h1
                                class="mb-5 border border-gray-400 hover:border-yellow-500 hover:bg-yellow-100 hover:text-yellow-900 bg-white p-5 border-right-yellow rounded shadow-md">
                                {{ $encyclopedia->translate('question') }}</h1>
                        </a>
                    @empty
                        @lang('app.data_not_found')
                    @endforelse
                </div>
                <div>
                    {{ $encyclopedias->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
