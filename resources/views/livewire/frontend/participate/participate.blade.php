<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.participate')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.participate_meta_description')</x-slot>
<x-slot name="og_title">@lang('app.anddy_soaal') | @lang('app.participate')</x-slot>
<x-slot name="og_description">@lang('app.anddy_soaal') | @lang('app.participate_meta_description')</x-slot>
<x-slot name="og_url">{{ Request::url() }}</x-slot>
<x-slot name="twitter_title">@lang('app.anddy_soaal') | @lang('app.participate')</x-slot>
<x-slot name="twitter_description">@lang('app.anddy_soaal') | @lang('app.participate_meta_description')</x-slot>
<x-slot name="twitter_site">{{ Request::url() }}</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
           {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto back-ground from-green-800 to-green-700 flex">
            <div class="w-1/2">
               <div class="flex justify-center items-center h-full text-5xl font-bold ">
                    @lang('app.participate')
               </div>
            </div>
            <div class="w-1/2">
            <div>
                    <img src="{{ asset('images/tatawo3.png') }}" alt="participate" class="w-full h-60"
                        alt="@lang('app.website_name')" />
            </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1
                class="border-right-green p-3 flex justify-end items-center text-md font-bold   border-b border-gray-300 mt-6">
                : &nbsp; <a href="javascript:void(0);" class="text-green-600">@lang('app.participate')</a>
                <strong class=" font-bold text-green-600 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-black hover:text-green-600">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap ">
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <p class="text-lg text-center">@lang('app.participate_page_text')</p>
            </div>
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <div class="text-center">
                    <h1 class="text-xl font-bold"> : @lang('app.participate')</h1>
                </div>
                <hr class="my-5">
                <div class="w-80 mx-auto text-right">
                    @include('alerts-front')
                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2 ml-auto">: @lang('app.name')</label>
                        <input type="text" wire:model="name"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('name')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2 ml-auto">: @lang('app.phone')</label>
                        <input type="text" wire:model="phone"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('phone')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2 ml-auto">: @lang('app.address')</label>
                        <input type="text" wire:model="address"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('address')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="text-lg font-bold mr-2">: @lang('app.message') (@lang('app.notes'))
                        </label>
                        <textarea wire:model="text"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"></textarea>
                        @error('text')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5 flex justify-center items-center">
                        <button
                            class="py-2 px-4 rounded text-center inline-block border border-green-600 font-bold text-base text-white bg-green-600 hover:bg-green-700 hover:text-white focus:outline-none transition duration-300"  wire:loading.attr="disabled" wire:click.prevent="send">
                            @lang('app.send')
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
