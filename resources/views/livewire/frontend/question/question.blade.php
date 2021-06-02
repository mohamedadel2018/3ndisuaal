<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.questions')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.questions_meta_description')</x-slot>
<x-slot name="og_title">@lang('app.anddy_soaal') | @lang('app.questions')</x-slot>
<x-slot name="og_description">@lang('app.anddy_soaal') | @lang('app.questions_meta_description')</x-slot>
<x-slot name="og_url">{{ Request::url() }}</x-slot>
<x-slot name="twitter_title">@lang('app.anddy_soaal') | @lang('app.questions')</x-slot>
<x-slot name="twitter_description">@lang('app.anddy_soaal') | @lang('app.questions_meta_description')</x-slot>
<x-slot name="twitter_site">{{ Request::url() }}</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
        {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-yellow-600 to-yellow-500 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-5xl font-bold text-gray-900">
                    @lang('app.ask_question')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/questions.svg') }}" class="w-full h-60"
                        alt="@lang('app.website_name')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right shadow-lg">
            <h1
                class="border-right-yellow p-3 flex justify-end items-center text-md font-bold   border-b border-gray-300 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-yellow-600">@lang('app.ask_question')</a>
                <strong class=" font-bold text-yellow-600 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-black hover:text-yellow-600">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap shadow-lg">
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <p class="text-lg text-center">@lang('app.questions_page_text')</p>
            </div>
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <div class="text-center">
                    <h1 class="text-xl font-bold"> : @lang('app.ask_question')</h1>
                </div>
                <hr class="my-5">
                <div class="w-80 mx-auto text-right">
                    @include('alerts-front')
                    <div class="mb-5">
                        <label class="text-lg font-bold ">@lang('app.category')</label>
                        <select name="selectedState" wire:model="selectedState"
                            class="w-full bg-white   border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-600 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="-1">@lang('app.category')</option>
                            @forelse ($encyclopediaCats as $epCat)
                                <option value="{{ $epCat->id }}">{{ $epCat->translate('name') }}</option>
                            @empty
                                <option value="">@lang('app.data_not_found')</option>
                            @endforelse
                        </select>
                        @error('selectedState')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="text-lg font-bold ">@lang('app.sub_category')</label>
                        <select id="the-subcat-id" name="encyclopedia_sub_cat_id" wire:model="encyclopedia_sub_cat_id"
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-600 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="-1">@lang('app.sub_category')</option>
                            {{-- {{ dd($encyclopediaSubCats) }} --}}
                            @forelse ($encyclopediaSubCats as $encyclopediaSubCat)

                                <option value="{{ $encyclopediaSubCat->id }}">
                                    {{ $encyclopediaSubCat->translate('name') }}</option>
                            @empty
                                <option value="">@lang('app.data_not_found')</option>
                            @endforelse
                        </select>
                        @error('encyclopedia_sub_cat_id')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2 ml-auto">: @lang('app.email')</label>
                        <input type="text" wire:model="email"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-600 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('email')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2">: @lang('app.message') (@lang('app.question'))
                        </label>
                        <textarea wire:model.debounce.2000ms="question"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-600 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"></textarea>
                        @error('question')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5 flex justify-center items-center">
                        <button
                            class="py-2 px-4 rounded text-center inline-block border border-yellow-500 font-bold text-base text-gray-900 bg-yellow-500 hover:bg-yellow-600  focus:outline-none transition duration-300"
                            wire:loading.attr="disabled" wire:click.prevent="send">
                            @lang('app.send')
                        </button>
                    </div>
                    <div class=" border border-gray-200">
                        @forelse ($matchedEncyclopediaQuestions as $index => $mEQuestion)
                            <a href="{{ route('encyclopedia',[$mEQuestion->id, $mEQuestion->translate('slug')]) }}">
                                <h1 class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-gray-200' }} p-2 hover:bg-yellow-300">{{ $mEQuestion->translate('question') }}</h1>
                            </a>
                        @empty
                            {{-- <h1 class="bg-gray-100 p-2 ">@lang('app.question_not_exists')</h1> --}}
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
