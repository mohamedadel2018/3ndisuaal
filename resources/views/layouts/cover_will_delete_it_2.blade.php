<x-slot name="cover">
    {{-- COVER START --}}
    <div class="cover bg-black h-192 relative">
        <div class="cover-image h-full ">
            <img src="{{ asset('images/cover-bg.jpg') }}" class="h-192 w-full" alt="Page Cover">
        </div>
        {{-- NAVBAR START --}}
        <div class="navbar absolute top-0 right-0 mr-16  h-20 flex justify-center items-center">
            {{-- <a href="javascript:void(0);" title="اللغة"
                    class="w-12 h-12 bg-yellow-50 rounded-full flex justify-center items-center mr-5 bg-yellow-300 text-white shadow-md hover:bg-red-900 transition duration-300">
                    <i class="fas fa-language text-2xl"></i>
                </a> --}}
            {{-- DROPDOWN START --}}
            <div class="pt-20 pb-20 pr-7">

                <div class="dropdown inline-block relative">
                    <button
                        class="bg-yellow-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current h-4 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                        <span class="mr-1">@lang('app.languages')</span>
                    </button>
                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-2 z-10">
                        <li class=""><a
                                class="rounded-t bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['ar']) }}">@lang('app.arabic')</a></li>
                        <li class=""><a
                                class="bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['en']) }}">@lang('app.english')</a>
                        </li>
                        <li class=""><a
                                class="rounded-b bg-yellow-200 hover:bg-red-900 hover:text-white text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['id']) }}">@lang('app.indonesia')</a></li>
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

        {{-- LOGO START --}}
        <div class="logo absolute top-3 left-14 bg-transparent w-40 h-40 ">
            <a href="javascript:void(0);">
                <img src="{{ asset('images/logo-2.png') }}" alt="logo">
            </a>
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
            <div class="news absolute w-3/6  bottom-12 ml-16 pr-10">
                <marquee behavior="" direction="">
                    <div class="flex">
                        @forelse ($newss as $new)
                            <p class="text-xl font-bold mr-5"> {{ $new->translate('title') }} </p><span class="mr-4"> --
                            </span>
                        @empty
                            @lang('app.data_not_found')
                        @endforelse
                    </div>
                </marquee>
            </div>
        </div>
    </div>
    {{-- COVER END --}}
</x-slot>
