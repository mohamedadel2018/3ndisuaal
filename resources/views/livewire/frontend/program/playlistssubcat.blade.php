<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.programs')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') @lang('app.program_cats_meta_description')
    @lang('app.program')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
         {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-purple-450 to-purple-600 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                   @lang('app.program_sub_cats_playlists')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/about_cover.svg') }}" class="w-full h-60"
                        alt="@lang('app.website_name')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1 class="border-right-purple p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-purple-450">{{ $programSubCat->translate('name') }}</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>
                 &nbsp; <a href="{{ route('playlists',[$programCat->id]) }}" class="text-gray-800 hover:text-purple-450">{{ $programCat->translate('name') }}</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>
                        <a href="{{ route('programs.cat') }}" class="hover:text-purple-450 text-gray-800">@lang('app.program_cats')</a>
                        <strong class=" font-bold text-purple mx-4">
                            < </strong>
                                <a href="{{ url('/') }}" class="hover:text-purple-450 text-gray-800">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
            <div class="w-2/6  p-5">
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400 shadow-md">
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.sub_categories')</h3>
                        <ul>
                            @forelse ($programSubCats as $programSubCat)
                            <a href="{{ route('playlists.subcat', [$programSubCat->id]) }}">
                                <li class="px-2 py-3 border-b text- rounded hover:bg-purple-100 hover:text-gray-900 flex justify-end items-center hover:border-purple-300">
                                    {{ $programSubCat->translate('name') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
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
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.categories')</h3>
                        <ul>
                            @forelse ($programCats as $programCat)
                            <a href="{{ route('playlists', [$programCat->id]) }}">
                                <li class="px-2 py-3 border-b text- rounded hover:bg-purple-100 hover:text-gray-900 flex justify-end items-center hover:border-purple-300">
                                    {{ $programCat->translate('name') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
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
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.programs')</h3>
                        <ul>
                            @forelse ($otherPlaylists as $otherPlaylist)
                            <a href="{{ route('programs',[$otherPlaylist->id]) }}">
                                <li class="px-2 py-3 border-b text- rounded hover:bg-purple-100 hover:text-gray-900 flex justify-end items-center hover:border-purple-300">
                                    {{ $otherPlaylist->translate('name') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
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
                {{-- <div class="flex justify-end align-center pt-4 pb-5">
                    <input type="text" placeholder="@lang('app.search')" class="border text-right border-gray-400 focus:ring-2 focus:outline-none focus:ring-gray-400 focus:border-gray-400 focus:shadow-lg px-2 py-2 rounded-md text-right shadow-md" wire:model="search">
                </div> --}}
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded flex flex-wrap justify-center">

                    @forelse ($playlists as $playlist)
                    <div class="w-1/2">
                        <div class="bg-white m-3 p-1 border border-gray-300 hover:border-white hover:bg-purple-100 transition hover:shadow-xl">
                            <div class="video-border">
                                <iframe src="https://www.youtube.com/embed/{{ $playlist->translate('video') }}" frameborder="0" class="video-iframe w-full h-full" allowfullscreen>
                                </iframe>
                                <h4 class="bg-purple-450 p-2 text-gray-100 font-bold text-center">
                                    {{ $playlist->translate('name') }}
                                </h4>
                                <div class="flex justify-between justify-center mt-2">

                                    <div>
                                        <a href="{{ route('programs',[$playlist->id]) }}" class="bg-purple-450 hover:bg-black text-white px-2 py-2 transition">
                                            @lang('app.details')
                                        </a>
                                    </div>

                                    <div class="flex items-center">{{ $playlist->programs->sum('views') }} &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @lang('app.data_not_found')
                    @endforelse
                </div>
                <div>
                    {{-- {{ $playlists->links() }} --}}
                </div>
            </div>
        </div>

    </div>
</div>
