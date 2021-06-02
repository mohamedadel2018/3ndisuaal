<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.program_cats')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.program_cats_meta_description')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
          {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-purple-450 to-purple-600 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                    @lang('app.program_cats')
               </div>
            </div>
            <div class="w-1/2">
            <div>
                    <img src="{{ asset('images/program.png') }}" alt="program" class="w-full h-60"
                        alt="@lang('app.website_name')" />
            </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1 class="border-right-purple p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-purple-450">@lang('app.program_cats')</a>
                <strong class=" font-bold text-purple-450 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-black hover:text-purple-450">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">
              
                <div class="container">
                        <div class="row">
                        @forelse ($programCats as $programCat)
                          <div class="col-md-3">
                                <a href="{{ route('playlists', [$programCat->id]) }}">
                                        <div class="bg-white p-4 mx-5 text-center mt-8 border border-gray-400 hover:border-purple-500 shadow-lg shadow-xl  transition duration-200 flex justify-center hover:bg-purple-450 text-gray-700  flex-col justify-center items-center h-32 hover:text-white hover:border-white font-bold">
                                            <h3>
                                                <i class="fab fa-youtube text-2xl"></i>
                                            </h3>
                                            <h4 class="mt-3 text-lg">{{ $programCat->translate('name') }}</h4>
                                        </div>
                                    </a>
                          </div>
                          @empty
                          @lang('app.data_not_found')
                          @endforelse
                        </div>
                      </div>

         

        </div>

    </div>
</div>
