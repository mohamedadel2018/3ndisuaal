<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.instractors') {{ $instractor->translate('slug') }}</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') {{ $instractor->translate('meta_description') }}</x-slot>
@push('css')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=606a1c6dae08f90011442c0e&product=inline-share-buttons"
        async="async"></script>
@endpush
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
        <div class="container mx-auto text-right">
            <h1
                class="border-right-blue p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300">
                :&nbsp;
                <a href="#" class="text-blue-900">{{ $instractor->translate('name') }}</a>
                <strong class=" font-bold text-blue mx-4">
                    < </strong>
                        &nbsp;
                        {{-- <a href="#"
                                    class="text-blue-900">@lang('app.instractors')</a>
                                <strong class=" font-bold text-blue mx-4">
                                    < </strong> --}}
                        <a href="{{ url('/') }}" class="hover:text-blue-900">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
            <div class="w-2/6  p-5">
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400 shadow-md">
                        <h3 class="p-3 text-center rounded bg-blue-800 text-white font-bold">
                            @lang('app.books')</h3>
                        <ul>
                            @forelse ($books as $book)
                                <a href="{{ route('book', [$book->id, $book->translate('slug')]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-blue-100 hover:text-blue-900 flex justify-end items-center hover:border-blue-300">
                                        {{ $book->translate('title') }}
                                        <i class="fas fa-book text-2xl ml-2 text-gray-600 hover:text-blue-100"></i>
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
                        <h3 class="p-3 text-center rounded bg-blue-800 text-white font-bold">
                            @lang('app.programs')</h3>
                        <ul>
                            @forelse ($playlists as $playlist)
                                <a href="{{ route('programs', [$playlist->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-blue-100 hover:text-blue-900 flex justify-end items-center hover:border-blue-300">
                                        {{ $playlist->translate('name') }}
                                        <i class="fab fa-youtube text-2xl ml-2 text-gray-600 "></i>
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
                        <div class="flex items-center">
                            <span class="text-blue-800 font-bold">{{ $playlistsCount }} &nbsp;</span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg> --}}
                            : @lang('app.playlists_count')
                            <i class="fab fa-youtube text-2xl ml-2 text-blue-700 "></i>
                        </div>
                        <div class="flex justify-center items-center">
                            {{-- <div class="sharethis-inline-share-buttons"></div> --}}
                            <span class="text-blue-800 font-bold">{{ $booksCount }}</span> &nbsp;:
                            @lang('app.books_count')
                            {{-- &nbsp; --}}
                            <i class="fas fa-book text-2xl ml-2 text-blue-700 hover:text-blue-100"></i>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg> --}}
                        </div>
                    </h4>
                    <h1
                        class="border border-white text-white   bg-blue-800 p-5 border-right-white rounded shadow-md text-xl font-bold my-1">
                        {{ $instractor->translate('name') }} <i class="fas fa-user-graduate ml-2"></i>
                    </h1>

                    <div class="bg-white p-5 border border-gray-300 shadow-lg">
                        <div class="w-full flex justify-center mb-5">
                            <div class="w-56  h-48 border border-gray-500 rounded-sm">
                                <img src="{{ getFile($instractor, 'default') }}" class="w-full h-full"
                                    alt="@lang('app.alt_tag')" />
                            </div>
                        </div>
                        <div class="mb-5">
                            <p class="leading-10">{{ $instractor->translate('about') }}</p>
                        </div>
                        <hr>
                        <div class="flex justify-center items-center">
                            {{-- @if (File::extension(getFile($encyclopedia, 'default')) == 'pdf')
                                <a href="{{ getFile($encyclopedia, 'default') }}"
                                    class="my-5 bg-purple-450 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-pdf ml-5"></i>
                                </a>
                            @else
                              <a href="javascript:void(0);"
                                    class="my-5 bg-purple-200 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-pdf ml-5"></i>
                                </a>
                            @endif --}}
                            @if (File::extension(getFile($instractor, 'file')) == 'docx' || File::extension(getFile($instractor, 'file')) == 'doc')
                                <a href="{{ getFile($instractor, 'file') }}" target="_blank"
                                    class="my-5 bg-gray-800 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-word ml-5"></i>
                                </a>
                            @else
                                <a href="javascript:void(0);" title="@lang('app.no_file_found')"
                                    class="my-5 bg-gray-300 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
                                    @lang('app.download_file')
                                    <i class="fas fa-file-word ml-5"></i>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
