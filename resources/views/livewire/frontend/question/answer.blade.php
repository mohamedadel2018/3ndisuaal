<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.questions') | @lang('app.answer')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.answer_questions_meta_description')</x-slot>
<x-slot name="og_title">@lang('app.anddy_soaal') | @lang('app.questions') | @lang('app.answer')</x-slot>
<x-slot name="og_description">@lang('app.anddy_soaal') | @lang('app.answer_questions_meta_description')</x-slot>
<x-slot name="og_url">{{ Request::url() }}</x-slot>
<x-slot name="twitter_title">@lang('app.anddy_soaal') | @lang('app.questions') | @lang('app.answer')</x-slot>
<x-slot name="twitter_description">@lang('app.anddy_soaal') | @lang('app.answer_questions_meta_description')</x-slot>
<x-slot name="twitter_site">{{ Request::url() }}</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
        {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-gradient-to-l from-yellow-600 to-yellow-500 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-5xl font-bold text-gray-900">
                    @lang('app.query_question')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/answer.svg') }}" class="w-full h-60" alt="@lang('app.alt_tag')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1
                class="border-right-yellow p-3 flex justify-end items-center text-md font-bold   border-b border-gray-300 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-yellow-600">@lang('app.query_question')</a>
                <strong class=" font-bold text-yellow-600 mx-4">
                    < </strong>
                        &nbsp; <a href="{{ route('question') }}" class="text-black hover:text-yellow-600"">@lang('app.ask_question')</a>
                <strong class=" font-bold text-black mx-4">
                            < </strong>
                                <a href="{{ url('/') }}"
                                    class="text-black hover:text-yellow-600">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap ">
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <p class="text-lg text-center">@lang('app.answer_page_text')</p>
            </div>
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <div class="text-center">
                    <h1 class="text-xl font-bold"> : @lang('app.query_question')</h1>
                </div>
                <hr class="my-5">
                <div class="w-80 mx-auto text-right">
                    @include('alerts-front')
                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2 ml-auto">: @lang('app.question_code')</label>
                        <input type="text" wire:model="question_code"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-yellow-300 focus:border-yellow-600 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('question_code')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div class="mb-5 flex justify-center items-center">
                        <button
                            class="py-2 px-4 rounded text-center inline-block border border-yellow-500 font-bold text-base text-gray-900 bg-yellow-500 hover:bg-yellow-600  focus:outline-none transition duration-300"
                            wire:loading.attr="disabled" wire:click.prevent="answer">
                            @lang('app.query')
                        </button>
                    </div>
                    {{-- ANSWER START --}}
                    @if ($questionAnswer != '')
                        <div class="mb-5 flex justify-center items-center flex-col border">
                            <h6
                                class="bg-yellow-200 border border-yellow-600 text-xs font-bold w-full px-5 py-2 text-right">
                                {{ $theQuestion }} : @lang('app.question')</h6>
                            <h4
                                class="bg-yellow-400 border border-yellow-600 text-xl font-bold w-full px-5 py-2 text-center">
                                @lang('app.answer')</h4>
                            <hr>
                            <p class="mt-3 leading-10 p-2">{{ $questionAnswer }}</p>
                        </div>
                    @elseif($questionAnswer == '' && $theQuestion != '')
                        <div class="mb-5 flex justify-center items-center flex-col border">
                            <h1
                                class="bg-yellow-200 border border-yellow-600 text-xs font-bold w-full px-5 py-2 text-right">
                                {{ $theQuestion }} : @lang('app.question')</h1>
                            <h1 class="bg-blue-100 border border-blue-400 text-lg  w-full px-5 py-2 text-center">
                                @lang('app.question_not_answered')</h1>
                            <hr>
                        </div>
                    @else

                    @endif


                    {{-- ANSWER END --}}
                </div>
            </div>
        </div>

    </div>
</div>
