<x-slot name="title">{{ $book->translate('meta_title') }}</x-slot>
<x-slot name="meta_description">{{ $book->translate('meta_description') }}</x-slot>
<x-slot name="og_title">{{ $book->translate('title') }} - {{ $book->instractor->translate('name') }}</x-slot>
<x-slot name="og_description">{{ $book->translate('description') }} - {{ $book->instractor->translate('name') }}</x-slot>
<x-slot name="og_image">{{ getFile($book, 'default')}}</x-slot>
<x-slot name="og_url">{{ Request::url() }}</x-slot>
<x-slot name="twitter_title">{{ $book->translate('title') }} - {{ $book->instractor->translate('name') }}</x-slot>
<x-slot name="twitter_description">{{ $book->translate('description') }} - {{ $book->instractor->translate('name') }}</x-slot>
<x-slot name="twitter_image">{{ getFile($book, 'default')}}</x-slot>
<x-slot name="twitter_site">{{ Request::url() }}</x-slot>
@push('css')
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=606a1c6dae08f90011442c0e&product=inline-share-buttons" async="async"></script>
@endpush
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
          {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-color from-gray-800 to-gray-700 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                    @lang('app.book_details')
               </div>
            </div>
            <div class="w-1/2">
            <div>
                    <img src="{{ asset('images/library.png') }}" alt="library" class="w-full h-60"
                        alt="@lang('app.alt_tag')" />
            </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1 class="border-right-gray p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300">
                : &nbsp; <a href="{{ route('books.subcat', [$book->book_sub_cat_id]) }}">{{ $book->bookSubCat->translate('name') }}</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>
                        &nbsp; <a href="{{ route('books', [$book->bookCat->id]) }}" class="text-gray-400">{{ $book->bookCat->translate('name') }}</a>
                        <strong class=" font-bold text-purple mx-4">
                            < </strong>
                                <a href="{{ route('books.cat') }}" class="hover:text-gray-800 text-gray-400">@lang('app.book_cats')</a>
                                <strong class=" font-bold text-purple mx-4">
                                    < </strong>
                                        <a href="{{ url('/') }}" class="hover:text-gray-800 text-gray-400">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
            <div class="w-2/6  p-5">
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <div class="bg-white mb-5 rounded border border-gray-400 shadow-md">
                        <h3 class="p-3 text-center rounded bg-gray-800 text-white font-bold">
                            @lang('app.sub_categories')</h3>
                        <ul>
                            @forelse ($bookSubCats as $bookSubCat)
                            <a href="{{ route('books.subcat', [$bookSubCat->id]) }}">
                                <li class="px-2 py-3 border-b text- rounded hover:bg-gray-200 hover:text-gray-900 flex justify-end items-center hover:border-gray-300">
                                    {{ $bookSubCat->translate('name') }}
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
                        <h3 class="p-3 text-center rounded bg-gray-800 text-white font-bold">
                            @lang('app.categories')</h3>
                        <ul>
                            @forelse ($bookCats as $bookCat)
                            <a href="{{ route('books', [$bookCat->id]) }}">
                                <li class="px-2 py-3 border-b text- rounded hover:bg-gray-200 hover:text-gray-900 flex justify-end items-center hover:border-gray-300">
                                    {{ $bookCat->translate('name') }}
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

                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded">
                    <h4 class="bg-white border border-gray-300 px-5 py-2 shadow-lg flex justify-between items-center">
                        <div class="flex">
                            {{ $book->views }} &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            @lang('app.author') : <a href="#" class="underline hover:text-gray-600">{{ $book->instractor->translate('name') }}</a>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="sharethis-inline-share-buttons" data-url="{{ Request::url() }}" data-title="{{ $book->translate('title') }}" data-image="{{ getFile($book, 'default')}}" data-description="{{ $book->translate('description') }}"></div> &nbsp; @lang('app.share')
                            &nbsp; <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                        </div>
                    </h4>
                    <h1 class="border border-white text-white bg-gray-800 p-5 border-right-white rounded shadow-md text-sm font-bold my-1">
                        {{ $book->translate('title') }}
                    </h1>

                    <div class="bg-white p-5 border border-gray-300 shadow-lg">
                        <div class="flex justify-center mb-4">
                            <img src="{{ getFile($book,'default') }}" width="300" height="200" class="border border-gray-400 h-64 w-72"  />
                        </div>
                        <hr>
                        <p class="text-xl leading-10">
                            {{ $book->translate('about') }}
                        </p>
                        <hr>
                        <div class="flex justify-center items-center">
                            @if (File::extension(getFile($book, 'file')) == 'pdf')
                            <a href="{{ getFile($book, 'file') }}" target="_blank" class="my-5 bg-gray-800 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
                                @lang('app.download_file')
                                <i class="fas fa-file-pdf ml-5"></i>
                            </a>
                            @else
                            <a href="javascript:void(0);"  title="@lang('app.no_file_found')" class="my-5 bg-gray-300 px-7 py-2 rounded text-gray-100 font-bold flex justify-between items-center">
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
