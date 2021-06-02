<x-slot name="title">@lang('app.anddy_soaal') | @lang('app.contact')</x-slot>
<x-slot name="meta_description">@lang('app.anddy_soaal') | @lang('app.contact_meta_description')</x-slot>
<div>
    <div class="content py-10 h-full bg-gray-200 pt-20">
        {{-- PAGE COVER START --}}
        <div class="contasiner mx-auto bg-color2 from-blue-800 to-blue-700 flex">
            <div class="w-1/2">
                <div class="flex justify-center items-center h-full text-5xl font-bold text-gray-100">
                    @lang('app.contact')
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <img src="{{ asset('images/call.png') }}" class="w-full h-90"
                        alt="@lang('app.website_name')" />
                </div>
            </div>
        </div>
        {{-- PAGE COVER END --}}
        <div class="container mx-auto text-right">
            <h1
                class="border-right-blue p-3 flex justify-end items-center text-md font-bold  border-b border-gray-300 mt-6 mb-5">
                : &nbsp; <a href="javascript:void(0);" class="text-blue-600">@lang('app.contact')</a>
                <strong class=" font-bold text-blue-600 mx-4">
                    < </strong>
                        <a href="{{ url('/') }}" class="text-black hover:text-blue-600">@lang('app.home')</a>
            </h1>
        </div>

        <div class="container flex mx-auto justify-center flex-wrap shadow-xl">
            <div class="bg-white p-5 border border-gray-300 mt-5 w-full">
                <div class="text-center">
                    <h1 class="text-xl font-bold"> : @lang('app.message_us')</h1>
                </div>

                <hr class="my-5">
                <div class="w-80 mx-auto flex justify-center items-center">
                    <div class="w-1/2 ">
                        <div class="flex justify-center items-ceter">
                            {!! nl2br($contactinfo->email) !!}
                        </div>
                    </div>
                    <div class="w-1/2 ">
                        <div class="flex justify-center items-ceter">
                            {!!  nl2br($contactinfo->phone)  !!}
                        </div>
                    </div>
                </div>
                <hr class="my-5">

                <div class="w-80 mx-auto flex justify-center items-center">
                    <div class="w-full">
                        <div class="flex justify-center items-ceter flex-wrap">
                            @forelse ($socials as $social)
                                <a href="{{ $social->translate('link') }}" class="ml-5 text-5xl font-bold border p-3 mb-3 hover:bg-blue-800 hover:text-gray-100 transition"
                                    target="_blank">
                                    {!! $social->icon !!}
                                </a>
                            @empty
                                @lang('app.data_not_found')
                            @endforelse
                        </div>
                    </div>
                </div>
                <hr class="my-5">
                <div class="w-80 mx-auto text-right">
                    @include('alerts-front')
                    <div class="mb-5">
                        <label class="text-lg  mr-2 ml-auto">: @lang('app.name')</label>
                        <input type="text" wire:model="name"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('name')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="text-lg  mr-2 ml-auto">: @lang('app.email')</label>
                        <input type="text" wire:model="email"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                        @error('email')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div class="mb-5">
                        <label class="text-lg  mr-2">: @lang('app.message') (@lang('app.notes'))
                        </label>
                        <textarea wire:model="message"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"></textarea>
                        @error('message')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5 flex justify-center items-center">
                        <button
                            class="py-2 px-4 rounded text-center inline-block border border-blue-600 font-bold text-base text-white bg-blue-600 hover:bg-blue-700 hover:text-white focus:outline-none transition duration-300"
                            wire:loading.attr="disabled" wire:click.prevent="send">
                            @lang('app.send')
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
