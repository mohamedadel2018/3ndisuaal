<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.programs')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') @lang('app.program_cats_meta_description')
    @lang('app.program')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
        {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-purple-450 to-purple-600 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                    @lang('app.program_playlists_details')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/program.png') }}" class="w-full h-60"
                        alt="@lang('app.website_name')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1
                class="border-right-purple p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-purple-450 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-purple-450">{{ $playlist->translate('name') }}</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>

                        <a href="{{ route('programs.cat') }}"
                            class="hover:text-purple-450 text-gray-800">@lang('app.program_cats')</a>
                        <strong class=" font-bold text-purple mx-4">
                            < </strong>
                                <a href="{{ url('/') }}"
                                    class="hover:text-purple-450 text-gray-800">@lang('app.home')</a>
            </h1>
        </div>
        <div class="row">
        <div class=" flex mx-auto justify-center flex-wrap">
            <div class="col-md-4 hidden-xs">
            <div class="flex justify-end align-center pt-4 pb-5">
                </div>
            {{-- <div class="w-2/6  p-5"> --}}
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400 shadow-md">
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.sub_categories')</h3>
                        <ul>
                            @forelse ($programSubCats as $programSubCat)
                                <a href="{{ route('playlists.subcat', [$programSubCat->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-purple-00 hover:text-gray-900 flex justify-end items-center hover:border-purple-300">
                                        {{ $programSubCat->translate('name') }}
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
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.categories')</h3>
                        <ul>
                            @forelse ($programCats as $programCat)
                                <a href="{{ route('playlists', [$programCat->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-purple-100 hover:text-gray-900 flex justify-end items-center hover:border-purple-300">
                                        {{ $programCat->translate('name') }}
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
                        <h3 class="p-3 text-center rounded bg-purple-450 text-white font-bold">
                            @lang('app.programs') sdaad</h3>
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
            {{-- </div> --}}
            </div>
            {{-- <div class="w-4/6  p-5"> --}}
                <div class="col-md-8  col-xs-12">
                
                <div class="flex justify-end align-center pt-4 pb-5">
                    <input type="text" placeholder="@lang('app.search')"
                        class="border text-right border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-400 focus:border-purple-400 focus:shadow-lg px-2 py-2 rounded-md text-right shadow-md"
                        wire:model="search">
                </div>
                <h5 class="bg-purple-450 border border-gray-300 px-5 py-2 shadow-lg flex justify-between items-center">
                    <div class="flex text-white font-bold items-center">
                        {{ $playlistViewsCount ?? 0 }} &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                 
                    <div class="text-white font-bold flex items-center">

                        @lang('app.programs_count') : <span href="#" class="text-white font-bold"
                            class="underline hover:text-gray-600"> {{ $programsCount }} </span>
                        <i class="fas fa-video ml-1"></i>
                    </div>
                    
                    <div class="text-white font-bold flex items-center">


                        <a href="#" class="text-white font-bold"
                            class="underline hover:text-gray-600">{{ $playlist->instractor->translate('name') }}</a>
                        &nbsp;: @lang('app.instractor')
                        <i class="fas fa-user-graduate ml-1"></i>
                    </div>
            
                </h5>
         
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">

                    @forelse ($programs as $program)
                        <h5 class="w-full   rounded-none border-gray-400 flex justify-between">
                            <div class="flex">
                                {{ $program->views }} &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex justify-center items-center" wire:ignore>
                                <div class="sharethis-inline-share-buttons z-1 " data-url="{{ Request::url() }}"
                                    data-title="{{ $program->translate('title') }}"
                                    data-image="{{ asset('images/logo-2-' . app()->getLocale() . '.png') }}"
                                    data-description="{{ $program->translate('description') }}"></div> &nbsp;
                                @lang('app.share')
                                &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                </svg>
                            </div>
                        </h5>
                        <h1
                            class=" qq border-t border-r border-l border-gray-400 hover:border-purple-500 hover:bg-purple-100 hover:text-purple-900 bg-white p-5 border-right-purple  rounded shadow-md flex justify-between mb-5">
                          
                            <div class=" flex items-center">
                                 
                                <a target="_blank" href="{{ $program->translate('sound') }}"
                                    class="bg-purple-450 hover:bg-black text-white px-2 py-2 transition text-sm mx-1">
                                    @lang('app.listen')
                                    <i class="fas fa-headphones"></i>
                                </a>
                                <button wire:click.prevent="openWatchModal( '{{$program->translate('title')}}','{{$program->translate('video')}}','{{ $program->id }}')"
                                    class="bg-purple-450 hover:bg-black text-white px-2 py-2 transition text-sm">
                                    @lang('app.watch')
                                    <i class="fas fa-video"></i>
                                </button>
                            </div>
                            <div class="flex justify-end ml-auto">
                                <h4>{{ $program->translate('title') }}</h4>
                            </div>
                          
                        </h1>
                        <div class="bg-white p-4 mb-5 hidden border border-gray-400 " id="details--{{ $program->id}}">{{ $program->translate('about') }}</div>
                    @empty
                        @lang('app.data_not_found')
                    @endforelse
                </div>
                </div>
                <div>
                    {{ $programs->links() }}
                </div>
                {{-- WATCH MODAL START --}}
                @if ($isWatchModalOpen)
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                        aria-modal="true">
                        <div
                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                            </div>

                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                aria-hidden="true">&#8203;</span>

                            <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
                            <div
                                class="inline-block edit-new align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all  sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="flex items-center">
                                        <div class="mt-3 text-center w-full h-64">
                                            <h3 class="text-lg mb-5 p-2 bg-yellow-800 leading-6 font-medium text-white" id="modal-title">
                                                {{ $videoTitle }}
                                            </h3>
                                            <iframe
                                                src="https://www.youtube.com/embed/{{ $videoUrl }}"
                                                frameborder="0" class="video-iframe w-full hv-full" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row mt-5">
                                    <hr>
                                    <button type="button"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm mtop"
                                        wire:click.prevent="closeWatchModal">
                                        @lang('app.close')
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                {{-- WATCH MODAL END --}}
            {{-- </div> --}}

        </div>
        </div>
    </div>

</div>
@push('css')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=606a1c6dae08f90011442c0e&product=inline-share-buttons"
        async="async"></script>
@endpush
