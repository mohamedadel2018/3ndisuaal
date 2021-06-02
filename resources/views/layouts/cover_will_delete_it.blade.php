{{-- COVER START --}}
<div class="cover bg-black h-192 relative">
    <div class="cover-image h-full ">
        <img src="{{ asset('images/cover-bg.jpg') }}" class="h-192 w-full" alt="Page Cover">
    </div>
    {{-- NAVBAR START --}}
    <div class="navbar absolute top-0 right-0 mr-16  h-20 flex justify-center items-center">

        {{-- DROPDOWN START --}}
        <div class="pt-20 pb-20 pr-7">

            <div class="dropdown inline-block relative">
                <button class="bg-yellow-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current h-4 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                    <span class="mr-1">@lang('app.languages')</span>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-2 z-10">
                    <li class=""><a
                            class="rounded-t bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                            href="{{ route('languages',['ar']) }}">@lang('app.arabic')</a></li>
                    <li class=""><a
                            class="bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                            href="{{ route('languages',['en']) }}">@lang('app.english')</a>
                    </li>
                    <li class=""><a
                            class="rounded-b bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                            href="{{ route('languages',['id']) }}">@lang('app.indonesia')</a></li>
                </ul>
            </div>

        </div>
        {{-- DROPDOWN END --}}
        <a href="javascript:void(0);" title="إتصل بينا"
            class="w-12 h-12 bg-yellow-50 rounded-full flex justify-center items-center mr-5 bg-yellow-300 text-white shadow-md hover:bg-red-900 transition duration-300">
            <i class="fas fa-phone text-2xl"></i>
        </a>

        <a href="javascript:void(0);" title="الرئيسية"
            class="w-12 h-12 bg-yellow-50 rounded-full flex justify-center items-center bg-yellow-300 text-white shadow-md hover:bg-red-900 transition duration-300">
            <i class="fa fa-home text-2xl"></i>
        </a>

    </div>
    {{-- NAVBAR END --}}
    {{-- QUEION MARK START --}}
    <div class="q absolute left-7 bottom-48">

        {{-- MODAL START --}}
        <div x-data="{open: false}">
            <a href="#" x-on:click.prevent="open = true"> <img class="animate-bounce"
                    src="{{ asset('images/q-ar.png') }}" alt="Ask Your Question"></a>

            <div x-show.transition.opacity="open" x-on:click.away="open = false"
                class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50">
                <div x-show.transition="open"
                    class="container max-w-3xl max-h-full bg-white rounded-xl shadow-lg overflow-auto">
                    <div class="px-8 py-4 border-b border-yellow-800 bg-green-400 flex justify-between">
                        <button x-on:click.prevent="open = false"
                            class="py-1 px-3 text-center inline-block border border-gray-600 font-bold text-base text-white bg-gray-900 hover:bg-black rounded hover:text-white focus:outline-none transition duration-300">
                            &times;
                        </button>
                        <h2 class="text-right text-lg font-bold">@lang('app.reads_registration')</h2>

                    </div>
                    <div class="px-8 py-4">
                        @include('alerts-front')

                        {{-- INPUTS START --}}
                        <div class="flex pt-10 flex-row-reverse text-right flex-wrap text-right">

                            <div class="w-1/2 mb-7">
                                <div class="mx-6">
                                    <label class="text-lg font-bold mr-2">@lang('app.category')</label>
                                    <select wire:model="read_cat_id"
                                        class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                        style="direction:rtl">
                                        <option value="">@lang('app.category')</option>
                                        {{-- @forelse ($readCats as $readCat)
                                            <option value="{{ $readCat->id }}">{{ $readCat->translate('name') }}
                                        </option>
                                        @empty
                                        <option value="">@lang('app.data_not_found')</option>
                                        @endforelse --}}
                                    </select>
                                    @error('read_cat_id')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-1/2 mb-7">
                                <div class="mx-6">
                                    <label class="text-lg font-bold mr-2 mb-10"> : @lang('app.sub_category')
                                    </label>
                                    <select wire:model="read_sub_cat_id"
                                        class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                        style="direction:rtl">
                                        <option value="-1">@lang('app.sub_category')</option>

                                        {{-- @forelse ($readSubCats as $readSubCat)
                                            <option value="{{ $readSubCat->id }}">{{ $readSubCat->translate('name') }}
                                        </option>
                                        @empty

                                        @endforelse --}}
                                    </select>
                                    @error('read_sub_cat_id')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>


                            <div class="w-full mb-7">
                                <div class="mx-6">
                                    <label class="text-lg font-bold mr-2">:
                                        (@lang('app.question'))
                                    </label>
                                    <input type="text" wire:model="good_time"
                                        class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                    @error('good_time')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{-- INPUTS END --}}
                    </div>
                    <div class="px-8 py-4 border-t border-gray-200 text-center flex justify-between">
                        <button x-on:click.prevent="open = false"
                            class="py-2 px-4 rounded text-center inline-block border border-red-600 font-bold text-base text-white bg-red-600 hover:bg-red-700 hover:text-white focus:outline-none transition duration-300">
                            @lang('app.close')
                        </button>

                        <button
                            class="bg-green-400 transition duration-300 hover:bg-green-600 border border-green-600 text-base font-bold  px-5 py-2 text-black rounded-lg"
                            wire:click.prevent="readRegister">@lang('app.registration')</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL END --}}
    </div>

    {{-- QUEION MARK END --}}
    {{-- LOGO START --}}
    <div class="logo absolute top-3 left-14 bg-transparent w-40 h-40 ">
        <a href="javascript:void(0);"><img src="{{ asset('images/logo-2.png') }}" alt="logo"></a>
    </div>
    {{-- LOGO END --}}
    {{-- BOX START --}}
    <div class="box absolute top-36 right-14">
        <img src="{{ asset('images/box-ar.png') }}" alt="Answer">
    </div>
    {{-- BOX END --}}
    {{-- MENUS LINKS START --}}
    <div class="menu-links absolute top-72 right-0 mr-14 mt-12 w-72 h-24 flex justify-start items-center just">

        <a href="javascript:void(0);" class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/icon-3.png') }}" class="h-24 w-24" alt="من نحن">
            <p class="text-md font-bold">من نحن</p>
        </a>
        <a href="javascript:void(0);" class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/icon-2.png') }}" class="h-24 w-24" alt="المقرأة">
            <p class="text-md font-bold">المقرأة</p>
        </a>
        <a href="javascript:void(0);" class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/icon-4.png') }}" class="h-24 w-24" alt="البرامج">
            <p class="text-md font-bold">البرامج</p>
        </a>
        <a href="javascript:void(0);" class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/icon-1.png') }}" class="h-24 w-24" alt="الموسوعة">
            <p class="text-md font-bold">الموسوعة</p>
        </a>

    </div>
    {{-- MENUS LINKS END --}}
    {{-- MENU2 START --}}
    {{-- <div class="menu-2-links absolute bottom-48 right-72 mt-12 w-72 h-26 flex justify-start items-center ">
            <a href="javascript:void(0);" class="flex flex-col justify-center items-center">
                <img src="{{ asset('images/icon-4.png') }}" class="h-24 w-24" alt="البرامج">
    <p class="text-md font-bold">البرامج</p>
    </a>
</div> --}}
{{-- MENU2 END --}}
<div class="flex bg-yellow-200">
    <div class="news absolute w-3/6 bg-red-400 bottom-12 ml-16 pr-10">
        <marquee behavior="" direction="">
            <div class="flex">

                {{-- @forelse ($newss as $news)
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    @empty
                    <p class="text-xl font-bold mr-5">@lang('app.data_not_found')</p><span class="mr-4"> -- </span>
                    @endforelse --}}

            </div>
        </marquee>
    </div>
</div>
</div>
{{-- COVER END --}}
