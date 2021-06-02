<div>
    <x-slot name="title">@lang('app.website_title') | @lang('app.about_title')</x-slot>
    <x-slot name="meta_description">@lang('app.about_description')</x-slot>

    <div class="content py-10 h-full bg-gray-200">
        {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-colorabout from-pink-600 to-pink-700 flex mt-10">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-5xl font-bold text-gray-100">
                    @lang('app.about_us')
               </div>
            </div>
            <div class="w-1/2">
            <div>
                    <img src="{{ asset('images/about.png') }}" class="w-full h-60"
                        alt="@lang('app.website_name')" />
            </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1
                class="mt-6 border-right-pink p-3 flex justify-end items-center text-md font-bold border-b border-gray-300">
                : &nbsp; <a href="javascript:void(0);" class="text-pink-600">@lang('app.about_us')</a>
                <strong class=" font-bold text-pink-600 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-black hover:text-pink-600">@lang('app.home')</a>
            </h1>
        </div>

        <div class="pb-10 px-5">
            {{-- SECTION ONE START --}}
            <div
                class="bg-white border border-gray-400 transition hover:border-pink-600 shadow-lg  rounded-lg mt-10 flex justify-center items-center py-10 about-page-about container mx-auto">
                <div class="w-3/4 text-right">
                    <div class="flex flex-row-reverse text-xl">
                        {{ $about->translate('about') }}
                    </div>
                </div>
                <div class="w-1/4 flex justify-center items-center">
                    <div
                        class="w-44 h-44 bg-gray-100 border border-gray-400 transition hover:border-pink-600 rounded-full flex justify-center items-center circle-title">
                        <h1 class="text-3xl ">@lang('app.about_us')</h1>
                    </div>
                </div>
            </div>
            {{-- SECTION ONE END --}}

            {{-- SECTION TWO START --}}
            <div
                class="bg-white shadow-lg  border border-gray-400 transition hover:border-pink-600 rounded-lg  mt-10  flex justify-center items-center py-10 about-page-vision  container mx-auto">

                <div class="w-1/4 flex justify-center items-center">
                    <div
                        class="w-44 h-44 bg-gray-100 border border-gray-400 transition hover:border-gray-800 rounded-full flex justify-center items-center circle-title">
                        <h1 class="text-3xl ">@lang('app.our_vision')</h1>
                    </div>
                </div>

                <div class="w-3/4 text-left">
                    <div class="flex flex-row-reverse text-xl pr-5">
                        {{ $about->translate('our_vision') }}
                    </div>
                </div>
            </div>
            {{-- SECTION TWO END --}}

            {{-- SECTION THREE START --}}
            <div
                class="bg-white  border border-gray-400 transition hover:border-pink-600 shadow-lg rounded-lg mt-10 flex justify-center items-center py-10 about-page-goals  container mx-auto">
                <div class="w-3/4 text-right">
                    <div class="flex flex-row-reverse text-xl pl-5 ">
                        {{ $about->translate('our_goals') }}
                    </div>
                </div>
                <div class="w-1/4 flex justify-center items-center">
                    <div
                        class="w-44 h-44 bg-gray-100 border border-gray-300 rounded-full flex justify-center items-center circle-title">
                        <h1 class="text-3xl ">@lang('app.our_goals')</h1>
                    </div>
                </div>
            </div>
            {{-- SECTION ThrottleRequests END --}}
        </div>
    </div>
</div>
