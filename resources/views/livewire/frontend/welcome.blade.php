<x-slot name="title">{{ $setting->translate('meta_title') }}</x-slot>
<x-slot name="meta_description">{{ $setting->translate('meta_descrption') }}</x-slot>
<section id="hero">
        <div class="hero-container">
          <h1>  @lang('app.Welcome_to_3ndisuaal') <span class="bak-color"> @lang('app.3ndisuaal')</span></h1>
          <h2> @lang('app.description_to_3ndisuaal') </h2>
          @if( app()->getLocale() == 'ar')
          <img src="{{asset('css/assets/img/Cover.jpg')}}" alt="Cover" data-aos="zoom-out" data-aos-delay="100" width="80%">
          @else 
          <img src="{{asset('css/assets/img/Cover-Englsih.jpg')}}" alt="Cover" data-aos="zoom-out" data-aos-delay="100" width="80%">
          @endif
          <a href="{{ route('programs.cat') }}" class="btn-get-started scrollto"><i class="fa fa-play fa-3x"></i> @lang('app.programs')</a>
          <div class="btns">
            <a href="#The_Recitation"> @lang('app.The_Recitation')</a>
            <a  href="#INSTRACTORS"><i class="fa fa-apple fa-3x"></i>@lang('app.INSTRACTORS') </a>
          </div>
        </div>
      </section><!-- End Hero Section -->
{{-- <div class="content py-10 h-full bg-gray-200"> --}}
    {{-- @if ($setting->home_cover == 1) --}}
        {{-- VIDEO START --}}
        {{-- <div class="container mt-12 border border-gray-400 shadow-lg mx-auto h-80">
            <iframe src="https://www.youtube.com/embed/{{ $setting->translate('video') }}" frameborder="0"
                class="video-iframe w-full h-full" allowfullscreen></iframe>
        </div> --}}
        {{-- VIDEO END --}}
    {{-- @else --}}
        {{-- SLIDER START --}}
        {{-- <div class="container mt-12 border border-gray-400 shadow-lg mx-auto h-80">
            <div class="main-slider h-80  overflow-y-hidden "> --}}
                {{-- @forelse ($sliders as $slider) --}}
                    {{-- {{ $slider->translate('is_video') }} --}}
                    {{-- @if ($slider->is_video == 1)
                        <div class="h-80 w-full">
                            <iframe src="https://www.youtube.com/embed/{{ $slider->translate('video') }}" frameborder="0"
                                class="video-iframe w-full h-full" allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="h-80 w-full">
                            <img src="{{ getFile($slider, 'default') }}" alt="Slider 1" class="w-full h-80">
                        </div>
                    @endif --}}
                {{-- @empty
                    @lang('app.data_not_found') --}}
    {{-- @endforelse --}}


    {{-- <div class="h-80 w-full"><img src="{{ asset('images/slide-2.jpg') }}" alt="Slider 2" class="w-full
            h-80">
        </div>
        <div class="h-80 w-full"><img src="{{ asset('images/slide-3.jpg') }}" alt="Slider 3" class="w-full h-80">
        </div> --}}
{{-- </div>
</div> --}}
{{-- SLIDER END --}}
{{-- @endif --}}
{{-- NEWS BAR START --}}
<div class="container mx-auto mt-12 bg-white py-2 p-5 flex border border-gray-400 shadow-lg">
    <span class="text1 flex-1 mr-2 font-semibold">
        <marquee direction="right">
            @forelse ($newss as $new)
                <i class="fas fa-question-circle question-icon text-gray-500 text-purple-450 mx-8"></i>
                {{ $new->translate('title') }}
            @empty
                @lang('app.data_not_found')
            @endforelse
        </marquee>
    </span>
    <span class="font-bold text-purple-450"> | @lang('app.news')</span>
</div>
{{-- NEWS BAR END --}}

{{-- PROGRAM SLIDER START --}}
<div class="programs container mx-auto  bg-white mt-12 border border-gray-400 shadow-2xl relative z-0">
    <div class="shape absolute wd-full opacity-10 z-0">
        <img src="{{ asset('images/shape2.png') }}" alt="Shape" >
    </div>
    <h1 class=" text-3xl text-center  mt-12 relative w-20 mx-auto z-10">
        @lang('app.programs')
        <span class=" title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h1>
    <div>
        <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10 relative z-10">
            <input type="text" placeholder="@lang('app.search_in_programs')" wire:model.debounce.1000ms="programSearch"
                class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
            <div class="bg-gray-100 border border-gray-300 mt-1 absolute top-10 w-60 text-right px-2 right-4 z-10 ">
                <ul class="clear-both">
                    @if ($programSearch != '')
                        @forelse ($programs as $program)
                            <li class=" border-b"><a class="text-gray-800 block hover:bg-white py-1 hover:text-purple-600"
                                    href="{{ route('programs', [$program->id]) }}">{{ $program->translate('name') }}</a>
                            </li>
                        @empty
                            <li class=" border-b text-center"><a class="text-gray-700 block bg-blue-100"
                                    href="#">@lang('app.programs_not_found')</a></li>
                    @endforelse
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <a name="The_Recitation"></a>

    <div class="programs-slider pt-10" wire:ignore>
        @forelse ($playlists as $playlist)
            {{-- VIDEO START --}}
            <div class="h-72 w-74 mx-2  border-purple-450 flex items-start relative">
                <iframe src="https://www.youtube.com/embed/{{ $playlist->translate('video') }}" frameborder="0"
                    class="video-iframe w-full h-72" allowfullscreen></iframe>
                <div class="border border-purple-450  absolute bottom-0 w-full">
                    <a href="{{ route('programs', [$playlist->id]) }}"
                    class="bg-purple-450 text-lg font-bold text-white block py-2 text-center ">{{$playlist->translate('name')}}</a>
                </div>
            </div>
            {{-- VIDEO END --}}
        @empty

        @endforelse



    </div>
</div>
{{-- PROGRAM SLIDER END --}}
{{-- READ START --}}
{{-- bg-white --}}
<div id="reads-section"
    class="reads container mx-auto py-10  border-t-2 border-gray-300 relative mt-12 border border-gray-400 shadow-2xl">
    <h1 class=" text-3xl text-center relative w-20 mx-auto text-white">
        @lang('app.reads')
        <span class="title-underline absolute border-b-4 w-6 border-yellow-800 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h1>
    <h3 class="text-lg mr-6 text-right relative text-white">
        @lang('app.registration')
        <span class="title-underline absolute border-b-4 w-6 border-yellow-800 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h3>
    {{-- MODAL START --}}
    <div x-data="{open: false}" x-cloak>
            <section id="get-started" class="padd-section  text-center">
        
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-lg-4 " data-aos="zoom-in" data-aos-delay="200">
                          <div class="feature-block">
                            <h1> <button x-on:click.prevent="open = true">
                            @lang('app.registration')
                        </button></h1>
                        
                          </div>
                        </div>
              
                     
              
                      </div>
                    </div>
              
            </section>
            <!-- End Get Started Section -->
       
        <div x-show.transition.opacity="open" x-on:click.away="open = false"
            class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50">
            <div x-show.transition="open"
                class="container max-w-3xl max-h-full bg-white rounded-xl shadow-lg overflow-auto">
                <div class="px-8 py-4 border-b border-yellow-800 bg-yellow-700 flex justify-between text-white">
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
                                <label class="text-lg font-bold mr-2"> : @lang('app.countries')</label>
                                <select wire:model="country_id"
                                    class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                    style="direction:rtl">
                                    <option value="">@lang('app.countries')</option>
                                    @forelse ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->translate('name') }}</option>
                                    @empty
                                        <option value="">@lang('app.data_not_found')</option>
                                    @endforelse
                                </select>
                                @error('country_id')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-1/2 mb-7">
                            <div class="mx-6">
                                <label class="text-lg font-bold mr-2">@lang('app.category')</label>
                                <select wire:model="read_cat_id"
                                    class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                    style="direction:rtl">
                                    <option value="">@lang('app.category')</option>
                                    @forelse ($readCats as $readCat)
                                        <option value="{{ $readCat->id }}">{{ $readCat->translate('name') }}</option>
                                    @empty
                                        <option value="">@lang('app.data_not_found')</option>
                                    @endforelse
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
                                <label class="text-lg font-bold mr-2 mb-10"> : @lang('app.sub_category')</label>
                                <select wire:model="read_sub_cat_id"
                                    class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                    style="direction:rtl">
                                    <option value="-1">@lang('app.sub_category')</option>

                                    @forelse ($readSubCats as $readSubCat)
                                        <option value="{{ $readSubCat->id }}">{{ $readSubCat->translate('name') }}
                                        </option>
                                    @empty

                                    @endforelse
                                </select>
                                @error('read_sub_cat_id')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="w-1/2 mb-7">
                            <div class="mx-6 ">
                                <label class="text-lg font-bold mr-2"> : @lang('app.type')</label>
                                <select wire:model="type"
                                    class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                    style="direction:rtl">
                                    <option value="">@lang('app.type')</option>
                                    <option value="1">@lang('app.male')</option>
                                    <option value="2">@lang('app.female')</option>
                                </select>
                                @error('type')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-1/2 mb-7">
                            <div class="mx-6">
                                <label class="text-lg font-bold mr-2">: @lang('app.name')</label>
                                <input type="text" wire:model="name"
                                    class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                @error('name')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="w-1/2 mb-7">
                            <div class="mx-6">
                                <label class="text-lg font-bold mr-2">: @lang('app.phone')</label>
                                <input type="text" wire:model="phone"
                                    class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                @error('phone')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-1/2 mb-7">
                            <div class="mx-6">
                                <label class="text-lg font-bold mr-2">@lang('app.email')</label>
                                <input type="text" wire:model="email"
                                    class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                @error('email')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        {
                        <div class="w-full mb-7">
                            <div class="mx-6">
                                <label class="text-lg font-bold mr-2">: @lang('app.good_time') (@lang('app.notes'))
                                </label>
                                <textarea wire:model="good_time"
                                    class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"></textarea>
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
                        class="bg-yellow-700 transition duration-300 hover:bg-yellow-600 border border-yellow-600 text-base font-bold  px-5 py-2 text-black rounded-lg text-white"
                        wire:click.prevent="readRegister">@lang('app.registration')</button>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL END --}}

</div>
{{-- READ END --}}

{{-- ENCYCLOPEDIA SLIDER START --}}

<div class="encyclopedia container mx-auto bg-white mt-12 border border-gray-400 relative z-0  shadow-2xl">
    <div class="shape absolute wd-full opacity-20 z-0">
        <img src="{{ asset('images/shape2.png') }}" class="w-full" alt="Shape">
    </div>
    <h1 class="text-3xl text-center relative w-20 mx-auto pt-10">
        @lang('app.encyclopedia')
        <span class="title-underline absolute border-b-4 w-6 border-yellow-500 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h1>
    <div class="">
        <div class="search-input flex justify-between  relative">
            <input type="text" wire:model.debounce.2000ms="encyclopediaSearch" placeholder="@lang('app.search')"
                class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2 ml-3">
            <div class="bg-gray-100 border border-gray-300 mt-1 absolute top-10 w-60 text-right px-2 left-4 z-10 ">
                <ul class="clear-both">
                    @if ($encyclopediaSearch != '')
                        @forelse ($encyclopediasSearch as $encyclopediaSearch)
                            <li class=" border-b"><a class="text-gray-800 block hover:bg-yellow-200 py-1 hover:text-gray-800"
                                    href="{{ route('encyclopedia', [$encyclopediaSearch->id, $encyclopediaSearch->translate('slug')]) }}">{{ $encyclopediaSearch->translate('question') }}</a>
                            </li>
                        @empty
                            @lang('app.data_not_found')
                    @endforelse
                    @endif
                </ul>
            </div>
            <h3 class="text-lg mr-3 text-right  text-gray-800 font-bold">
                @lang('app.most_viwed_question')
            </h3>
        </div>
    </div>
    <div class="ped-slider  border-t-2  flex flex-wrap flex-row-reverse text-right z-20">

        <div class="w-2/6  p-2">
            <div class="question-slider" wire:ignore.self>
                @forelse ($encyclopediasMostViwedQuestion as $key=> $encyclopedia)
                    {{-- NEWS START --}}
                    <div>
                        <a href="{{ route('encyclopedia', [$encyclopedia->id, $encyclopedia->translate('slug')]) }}"
                            class="block text-base px-1 py-2 rounded mb-2 bg-gray-100  border border-gray-400 {{ $key % 2 == 0 ? 'bg-gray-200' : 'bg-gray-100' }} hover:bg-yellow-400 hover:text-black">
                            {{ $encyclopedia->translate('question') }}</a>
                    </div>
                    {{-- NEWS END --}}
                @empty

                @endforelse
            </div>
        </div>
        <div class="w-2/6 overflow-auto flex flex-wrap items-center justify-center  z-20">

            @forelse ($randomEncyclopediaCats as $randomEncyclopediaCat)

                <div
                    class="bg-yellow-400 border hover:bg-yellow-500 hover:text-black transition duration-200 border-gray-400 h-12 w-full flex items-center justify-center rounded-md hover:font-bold m-2">
                    <a href="{{ route('encyclopedias', [$randomEncyclopediaCat->id]) }}"
                        class="block w-full h-full flex justify-center items-center rounded-sm text-center">{{ $randomEncyclopediaCat->translate('name') }}</a>
                </div>
            @empty
                @lang('app.data_not_found')
            @endforelse


        </div>
        <div class="w-2/6  ">
            {{-- HEREQUEION MARK START --}}
            <div class="w-full h-full flex justify-center items-center">
                <a href="javascript:void(0);" id="myBtn">
                    <img class=" animate-bounce w-52" src="{{ asset('images/q-' . app()->getLocale() . '.png') }}"
                        alt="Ask Your Question">
                </a>
                {{-- HEREMODAL START --}}
                <div id="myModal" class="modal" x-data="handleQuestion()"
                    x-init="$watch('encyclopedia_cat_id', onWatchRun);$watch('question', onQuestionWatch);">
                    <div class="modal-content rounded-lg">
                        <div
                            class="bg-yellow-400 flex px-5 py-4 text-lg font-bold flex justify-between items-center rounded-lg">
                            <div>
                                <span class="close text-black">&times;</span>
                            </div>
                            <div>@lang('app.ask_question')</div>
                        </div>
                        <div class="flex flex-wrap py-3 px-5" dir="rtl">
                            <div x-show.transition.duration.1000ms="isSuccess"
                                class="w-full bg-green-500  text-white border border-green-600 text-center text-lg font-bold p-3 rounded-lg">
                                <i class="fas fa-check-square text-xl"></i> @lang('app.question_saved') ( <span
                                    id="question-code"></span> )
                            </div>
                            <div x-show.transition.duration.500ms="isError"
                                class="w-full bg-red-500  text-white border border-red-600 text-center text-lg font-bold p-3 rounded-lg">
                                @lang('app.all_fields_required')
                            </div>
                            <div class="w-1/2">
                                <div class="mx-10 mt-2">
                                    <label class="text-lg font-bold mx-5">@lang('app.category')</label>
                                    <select name="encyclopedia_cat_id" x-model="encyclopedia_cat_id"
                                        class="w-full bg-white   border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                        style="direction:rtl">
                                        <option value="-1">@lang('app.category')</option>
                                        @forelse ($encyclopediaCats as $epCat)
                                            <option value="{{ $epCat->id }}">{{ $epCat->translate('name') }}</option>
                                        @empty
                                            <option value="">@lang('app.data_not_found')</option>
                                        @endforelse
                                    </select>
                                    @error('encyclopedia_cat_id')
                                        <p class="text-red-500 text-sm">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-1/2">

                                <div class="mx-10 mt-2">
                                    <label class="text-lg font-bold mx-5">@lang('app.sub_category')</label>
                                    <select id="the-subcat-id" name="encyclopedia_sub_cat_id"
                                        x-model="encyclopedia_sub_cat_id"
                                        class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                                        style="direction:rtl">
                                        <option value="">@lang('app.sub_category')</option>
                                    </select>
                                    @error('encyclopedia_sub_cat_id')
                                        <p class="text-red-500 text-sm">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-1/2">

                                <div class="mx-10 mt-2">
                                    <label class="text-lg font-bold mx-5">@lang('app.email')</label>
                                    <input name='question_email' x-model="question_email"
                                        class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                    @error('question_email')
                                        <p class="text-red-500 text-sm">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>


                            <div class="w-full">
                                <div class="mx-10 mt-2">
                                    <label class="text-lg font-bold mr-2">@lang('app.question')</label>
                                    {{-- toquestion --}}
                                    <textarea name='question' x-model="question"
                                        class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                                    </textarea>
                                    <div class="w-2/3" id="matched_question">

                                    </div>
                                    @error('question')
                                        <p class="text-red-500 text-sm">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-center items-center px-5 py-4">
                            <button class="text-lg bg-yellow-400 text-black p-3 rounded font-bold"
                                @click="sendTheQuestion">@lang('app.send')</button>
                        </div>
                    </div>

                </div>
                {{-- HEREMODAL END --}}
            </div>
            {{-- QUEION MARK END --}}
        </div>
    </div>
</div>
{{-- ENCYCLOPEDIA SLIDER END --}}
{{-- BOOKS START --}}
<div class="books container mx-auto py-10  bg-white mt-12 border border-gray-400 shadow-2xl">
    <h1 class=" text-3xl text-center relative w-20 mx-auto ">
        @lang('app.books')
        <span class=" title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h1>
    <div>
        <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10 relative">
            <input type="text" wire:model.debounce.250ms="bookSearch" placeholder="@lang('app.search')"
                class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">

            <div class="bg-gray-100 border border-gray-300 mt-1 absolute top-10 w-60 text-right px-2 right-4 z-10 ">
                <ul class="clear-both">
                    @if ($bookSearch != '')
                        @forelse ($booksSearch as $bookSearchData)
                            <li class=" border-b"><a class="text-gray-800 block hover:bg-white py-1 hover:text-purple-600"
                                    href="{{ route('book', [$bookSearchData->id, $bookSearchData->translate('slug')]) }}">{{ $bookSearchData->translate('title') }}</a>
                            </li>
                        @empty
                            <li class=" border-b text-center"><a class="text-gray-700 block bg-blue-100"
                                    href="#">@lang('app.data_not_found')</a></li>
                    @endforelse
                    @endif
                </ul>
            </div>

        </div>
    </div>
    <div class="books-slider pt-10" wire:ignore>
        @forelse ($books as $book)
            <div class="h-72 w-full mx-2 border border-purple-800 relative ">
                <a href="{{ route('book', [$book->id, $book->translate('slug')]) }}" class="">
                    <img data-lazy="{{ getFile($book, 'default') }}" alt="@lang('app.alt_tag')" class="w-full h-72">
                    <h3 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">
                        <a
                            href="{{ route('book', [$book->id, $book->translate('slug')]) }}">{{ $book->translate('title') }}</a>
                    </h3>
                </a>
            </div>
        @empty
            @lang('app.data_not_found')
        @endforelse

    </div>
</div>
{{-- BOOKS END --}}
{{-- INSTRACTORS START --}}
{{-- bg-gray-100 --}}
<a name="INSTRACTORS"></a>
<section id="team" class="padd-section text-center">
    
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center">
            <div class="shape absolute wd-full opacity-20 z-0">
                <img src="{{ asset('images/shape2.png') }}" class="w-full" height='500' alt="Shape">
            </div>
            
            <h2> @lang('app.instractors')</h2>
          </div>
  
          <div class="row">
                {{-- <a href="{{ route('instractor', [$instractor->id, $instractor->translate('slug')]) }}" class="">
                        <img data-lazy="{{ getFile($instractor, 'default') }}" alt="Slider 1" class="w-full h-72">
                        <h3 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-blue-900 text-center">
                            {{ $instractor->translate('name') }}
                        </h3>
                    </a> --}}
             <div class="instractors-slider pt-10" wire:ignore>
                @forelse ($instractors as $instractor)
            <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
              <div class="team-block bottom border-radios">
            <a href="{{ route('instractor', [$instractor->id, $instractor->translate('slug')]) }}" class="">
                <img data-lazy="{{ getFile($instractor, 'default') }}" alt="instractor" class="img-responsive" >
                <div class="team-content">
                 
                  <span>@lang('app.instractor')</span>
                  <h4>  {{ $instractor->translate('name') }}</h4>
                </div>
            </a>
              </div>
            </div>
            @empty
            @lang('app.data_not_found')
        @endforelse

          </div>
          </div>
        </div>
      </section><!-- End Team Section -->

{{-- 
<div   class="instractors container mx-auto py-10 bg-white  mt-12 border border-gray-400 shadow-2xl">
    <h1 class="text-3xl text-center relative w-20 mx-auto ">
        @lang('app.instractors')
        <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
            style="bottom: -1rem"></span>
    </h1>
    <div>
        <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10"> --}}
            {{-- <input type="text" placeholder="بحث فى المكتبة "
                        class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"> --}}
{{-- 
        </div>
    </div>
    <div class="instractors-slider pt-10" wire:ignore>
        @forelse ($instractors as $instractor)
            <div class="h-72 w-full mx-2 border border-blue-800 relative ">
                <a href="{{ route('instractor', [$instractor->id, $instractor->translate('slug')]) }}" class="">
                    <img data-lazy="{{ getFile($instractor, 'default') }}" alt="Slider 1" class="w-full h-72">
                    <h3 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-blue-900 text-center">
                        {{ $instractor->translate('name') }}
                    </h3>
                </a>
            </div>
        @empty
            @lang('app.data_not_found')
        @endforelse

    </div>
</div> --}}
{{-- INSTRACTORS END --}}



</div>
@push('js')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script>
        function handleQuestion() {
            // tojs
            return {
                isSuccess: false,
                isError: false,
                encyclopedia_cat_id: '',
                encyclopedia_sub_cat_id: '',
                question_email: '',
                question: '',
                sendTheQuestion() {
                    // this.isSuccess = true;
                    var encyclopediaCatId = this.encyclopedia_cat_id;
                    var encyclopediaSubCatId = this.encyclopedia_sub_cat_id;
                    var theQuestionEmail = this.question_email;
                    var theQuestion = this.question;
                    // AJX JQUERY
                    axios.post('/question/store', {
                        'encyclopedia_cat_id': encyclopediaCatId,
                        'encyclopedia_sub_cat_id': encyclopediaSubCatId,
                        'question_email': theQuestionEmail,
                        'question': theQuestion,
                    }).then(res => {
                        this.isError = false;
                        this.encyclopedia_cat_id = '';
                        this.encyclopedia_sub_cat_id = '';
                        this.question_email = '';
                        this.question = '';
                        $("#the-subcat-id").empty();
                        $("#the-subcat-id").append('<option value="">====</option>');
                        $("#question-code").empty();
                        $("#question-code").text(res.data.question_code);
                        this.isSuccess = true;

                    }).catch(err => {
                        this.isSuccess = false;
                        this.isError = true;
                    });
                },
                onWatchRun(val) {
                    axios.get('/getencyclopediasubcats/' + val).then(res => {

                        var data = res.data;
                        $("#the-subcat-id").empty();
                        $("#the-subcat-id").append('<option value="">====</option>');
                        $.each(data, (index, value) => {
                            $("#the-subcat-id").append(
                                '<option value="' +
                                value.id +
                                '">' +
                                value.text +
                                "</option>"
                            );
                        });
                    }).catch(err => {
                        console.log(err);
                    })
                },
                onQuestionWatch(qVal) {
                    axios.get('/getmatchedquestions/' + qVal).then(res => {
                        console.log(res);
                        $("#matched_question").html(res.data.output);
                        // console.log(res);
                    }).catch(err => console.log(err));

                }
            };
        }

    </script>
@endpush
@push('css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endpush
