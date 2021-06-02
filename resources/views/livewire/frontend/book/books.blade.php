<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.books')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') @lang('app.book_cats_meta_description')
    @lang('app.book')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
           {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-color from-gray-800 to-gray-700 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                    @lang('app.book_cats_books')
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
            <h1
                class="border-right-gray p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300">
                : &nbsp; <a href="javascript:void(0);" class="text-gray-800">{{ $bookCat->translate('name') }}</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>
                        <a href="{{ route('books.cat') }}"
                            class="hover:text-gray-800 text-gray-500">@lang('app.book_cats')</a>
                        <strong class=" font-bold text-purple mx-4">
                            < </strong>
                                <a href="{{ url('/') }}"
                                    class="hover:text-gray-800 text-gray-500">@lang('app.home')</a>
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
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-gray-200 hover:text-gray-900 flex justify-end items-center hover:border-gray-300">
                                        {{ $bookSubCat->translate('name') }}
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
                        <h3 class="p-3 text-center rounded bg-gray-800 text-white font-bold">
                            @lang('app.categories')</h3>
                        <ul>
                            @forelse ($bookCats as $bookCat)
                                <a href="{{ route('books', [$bookCat->id]) }}">
                                    <li
                                        class="px-2 py-3 border-b text- rounded hover:bg-gray-200 hover:text-gray-900 flex justify-end items-center hover:border-gray-300">
                                        {{ $bookCat->translate('name') }}
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
                <div class="flex justify-end align-center pt-4 pb-5">
                    <input type="text" placeholder="@lang('app.search')"
                        class="border text-right border-gray-400 focus:ring-2 focus:outline-none focus:ring-gray-400 focus:border-gray-400 focus:shadow-lg px-2 py-2 rounded-md text-right shadow-md"
                        wire:model="search">
                </div>
                <div class="bg-gray-200 border border-gray-300 p-5 text-right rounded flex flex-wrap">
                    @forelse ($books as $book)
                        <div class="w-1/3">
                            <div class="m-3 border border-gray-400 border-green">
                                <a href="{{ route('book', [$book->id, $book->translate('slug')]) }}">
                                    <div>
                                        <img src="{{ getFile($book, 'default') }}" class="w-full h-28" />
                                    </div>
                                    <h4 class="bg-gray-800 text-white text-center py-2">{{ $book->translate('title') }}</h4>
                                </a>
                            </div>
                        </div>
                    @empty
                        @lang('app.data_not_found')
                    @endforelse
                </div>
                <div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
