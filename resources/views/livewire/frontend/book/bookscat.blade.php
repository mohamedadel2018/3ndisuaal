<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.book_cats')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.book_cats_meta_description')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
          {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-color from-gray-800 to-gray-700 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-3xl font-bold text-gray-100">
                    @lang('app.book_cats')
               </div>
            </div>
            <div class="w-1/2">
            <div>
                    <img src="{{ asset('images/library.png') }}" class="w-full h-90"
                        alt="@lang('app.website_name')" />
            </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1 class="border-right-gray p-3 flex justify-end items-center text-md font-bold mx-5  border-b border-gray-300 mt-6">
                {{-- <strong class=" font-bold text-purple-700 mx-4"> < </strong> --}}
                : &nbsp; <a href="javascript:void(0);" class="text-gray-800">@lang('app.encyclopedia_cats')</a>
                <strong class=" font-bold text-purple mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-800">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap">

          
            <div class="container">
                    <div class="row">
                          @forelse ($bookCats as $bookCats)
                      <div class="col-md-3">
                            <a href="{{ route('books', [$bookCats->id]) }}">
                                    <div
                                        class="bg-white p-4 mx-5 text-center mt-8 border border-gray-400 hover:border-gray-700 shadow-lg shadow-xl  transition duration-200 flex justify-center hover:bg-gray-800 text-gray-700 hover:text-black flex-col justify-center items-center h-32 hover:text-white hover:border-white font-bold">
                                        <h3>
                                          <i class="fas fa-book text-2xl"></i>
                                        </h3>
                                        <h4 class="mt-3 text-lg">{{ $bookCats->translate('name') }}</h4>
                                    </div>
                                </a>
                      </div>
                      @empty
                      @lang('app.data_not_found')
                  @endforelse
                    </div>
                  </div>

                {{-- <div class="w-1/5">
                    <a href="{{ route('books', [$bookCats->id]) }}">
                        <div
                            class="bg-white p-4 mx-5 text-center mt-8 border border-gray-400 hover:border-gray-700 shadow-lg shadow-xl  transition duration-200 flex justify-center hover:bg-gray-800 text-gray-700 hover:text-black flex-col justify-center items-center h-32 hover:text-white hover:border-white font-bold">
                            <h3>
                              <i class="fas fa-book text-2xl"></i>
                            </h3>
                            <h4 class="mt-3 text-lg">{{ $bookCats->translate('name') }}</h4>
                        </div>
                    </a>
                </div> --}}
          

        </div>

    </div>
</div>
