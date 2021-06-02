<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.encyclopedia_cats_meta_description')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
      {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-yellow-600 to-yellow-400 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-800">
                    @lang('app.encyclopedia_cats')
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
            <h1 class="border-right-yellow p-3 flex justify-end items-center text-md font-bold  border-b border-gray-300 mt-6 mx-5">
                {{-- <strong class=" font-bold text-yellow-700 mx-4"> < </strong> --}}
                : &nbsp; <a href="javascript:void(0);" class="text-yellow-700">@lang('app.encyclopedia_cats')</a>
                <strong class=" font-bold text-gray-800 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="hover:text-yellow-700">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
            
                <div class="container">
                        <div class="row">
                        @forelse ($encyclopediaCats as $encyclopediaCat)
                          <div class="col-md-3">
                                <a href="{{ route('encyclopedias', [$encyclopediaCat->id]) }}">
                                        <div
                                            class="bg-white p-4 mx-5 text-center mt-8 border border-gray-400 hover:border-gray-700 shadow-lg shadow-xl  transition duration-200 flex justify-center hover:bg-yellow-400 text-gray-700 hover:text-black flex-col justify-center items-center h-32  hover:border-yellow-700 font-bold">
                                            <h3>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" class="w-10 h-10 ">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                                </svg>
                                            </h3>
                                            <h4 class="mt-3 text-lg">{{ $encyclopediaCat->translate('name') }}</h4>
                                        </div>
                                    </a>
                          </div>
                          @empty
                          @lang('app.data_not_found')
                         @endforelse
                    </div>
                </div>


            {{-- @forelse ($encyclopediaCats as $encyclopediaCat)
                <div class="w-1/5">
                    <a href="{{ route('encyclopedias', [$encyclopediaCat->id]) }}">
                        <div
                            class="bg-white p-4 mx-5 text-center mt-8 border border-gray-400 hover:border-gray-700 shadow-lg shadow-xl  transition duration-200 flex justify-center hover:bg-yellow-400 text-gray-700 hover:text-black flex-col justify-center items-center h-32  hover:border-yellow-700 font-bold">
                            <h3>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-10 h-10 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </h3>
                            <h4 class="mt-3 text-lg">{{ $encyclopediaCat->translate('name') }}</h4>
                        </div>
                    </a>
                </div>
            @empty
                @lang('app.data_not_found')
            @endforelse --}}

        </div>

    </div>
</div>
