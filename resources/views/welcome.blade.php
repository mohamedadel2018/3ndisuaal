<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased font-almarai">
    {{-- COVER START --}}
    <div class="cover bg-black h-192 relative">
        <div class="cover-image h-full ">
            <img src="{{ asset('images/cover-bg.jpg') }}" class="h-192 w-full" alt="Page Cover">
        </div>
        {{-- NAVBAR START --}}
        <div class="navbar absolute top-0 right-0 mr-16  h-20 flex justify-center items-center">
            <a href="javascript:void(0);" title="اللغة"
                class="w-12 h-12 bg-yellow-50 rounded-full flex justify-center items-center mr-5 bg-yellow-300 text-white shadow-md hover:bg-red-900 transition duration-300">
                <i class="fas fa-language text-2xl"></i>
            </a>
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
        {{-- QUEION MARK START --}}
        <div class="q absolute left-7 bottom-48">
            <a href="javascript:void(0);"> <img src="{{ asset('images/q-ar.png') }}" alt="Ask Your Question"></a>
        </div>
        {{-- QUEION MARK END --}}
        {{-- LOGO START --}}
        <div class="logo absolute top-3 left-14 bg-transparent w-40 h-40">
            <a href="javascript:void(0);"><img src="{{ asset('images/logo-2.png') }}" alt="logo"></a>
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
        <div class="news absolute w-3/6 bg-red-400 bottom-12 ml-16 pr-10">
            <marquee behavior="" direction="">
                <div class="flex">
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                    <p class="text-xl font-bold mr-5"> عنوان الخبر</p><span class="mr-4"> -- </span>
                </div>
            </marquee>
        </div>
    </div>
    </div>
    {{-- COVER END --}}
    {{-- CONTENT START --}}
    <div class="content py-10 h-full">
        {{-- VIDEO START --}}
        <div class="container bg-gray-300 mx-auto h-80">
            <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                class="video-iframe w-full h-full"></iframe>
        </div>
        {{-- VIDEO END --}}
        {{-- SLIDER START --}}
        <div class="container bg-gray-300 mx-auto h-80">
            <div class="main-slider h-80  overflow-y-hsidden ">
                <div class="h-80 w-full"><img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1"
                        class="w-full h-80"></div>
                <div class="h-80 w-full"><img src="{{ asset('images/slide-2.jpg') }}" alt="Slider 2"
                        class="w-full h-80"></div>
                <div class="h-80 w-full"><img src="{{ asset('images/slide-3.jpg') }}" alt="Slider 3"
                        class="w-full h-80"></div>
            </div>
        </div>
        {{-- SLIDER END --}}
        {{-- PROGRAM SLIDER START --}}
        {{-- bg-gray-200 --}}
        <div class="programs container mx-auto py-10">
            <h1 class="text-3xl text-center relative w-20 mx-auto ">
                البرامج
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h1>
            <div>
                <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10">
                    <input type="text" placeholder="بحث فى البرامج"
                        class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">

                </div>
            </div>
            <div class="programs-slider pt-10">
                <div class="h-72 w-full mx-2 border border-purple-800">
                    {{-- <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="w-full h-72"> --}}
                    <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                        class="video-iframe w-full h-full"></iframe>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800">
                    {{-- <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="w-full h-72"> --}}
                    <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                        class="video-iframe w-full h-full"></iframe>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800">
                    {{-- <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="w-full h-72"> --}}
                    <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                        class="video-iframe w-full h-full"></iframe>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800">
                    {{-- <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="w-full h-72"> --}}
                    <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                        class="video-iframe w-full h-full"></iframe>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800">
                    {{-- <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="w-full h-72"> --}}
                    <iframe src="https://www.youtube.com/embed/5yO433hdR2M" frameborder="0"
                        class="video-iframe w-full h-full"></iframe>
                </div>
            </div>
        </div>
        {{-- PROGRAM SLIDER END --}}
        {{-- READ START --}}
        {{-- bg-white --}}
        <div class="programs container mx-auto py-10  border-t-2 border-gray-300">
            <h1 class="text-3xl text-center relative w-20 mx-auto">
                المقرأة
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h1>
            <h3 class="text-lg mr-6 text-right relative text-purple-800">
                التسجيل
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h3>
            <div class="flex pt-10 flex-row-reverse text-right flex-wrap text-right">
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2"> : البلاد</label>
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2"> : الأقسام الرئيسية</label>
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2 mb-10"> : الأقسام الفرعية</label>
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2"> : البرنامج </label>
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6 ">
                        <label class="text-lg font-bold mr-2"> : المستوى</label>;
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6 ">
                        <label class="text-lg font-bold mr-2"> : النوع</label>
                        <select
                            class="w-full bg-white mr-5  border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-3 rounded-md text-right mr-2 "
                            style="direction:rtl">
                            <option value="">البلاد</option>
                            <option value="">مصر</option>
                        </select>
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2">: الأسم</label>
                        <input type="text" placeholder="بحث فى البرامج"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                    </div>
                </div>

                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2">: الهاتف</label>
                        <input type="text" placeholder="بحث فى البرامج"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2">: البريد الإلكتروني</label>
                        <input type="text" placeholder="بحث فى البرامج"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                    </div>
                </div>
                <div class="w-1/3 mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2">: رقم الهوية </label>
                        <input type="text" placeholder="بحث فى البرامج"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">
                    </div>
                </div>
                <div class="w-full mb-7">
                    <div class="mx-6">
                        <label class="text-lg font-bold mr-2">: الوقت المناسب (ملاحظات) </label>
                        <textarea type="text" placeholder="بحث فى البرامج"
                            class="w-full border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"></textarea>
                    </div>
                </div>
                <div class="w-full mb-7 flex justify-center items-center">
                    <button class="bg-purple-800 px-5 py-2 text-white rounded-lg">تسجيل</button>
                </div>

            </div>
        </div>
        {{-- READ END --}}

        {{-- ENCYCLOPEDIA SLIDER START --}}

        <div class="encyclopedia container mx-auto py-10 "> <!-- bg-gray-200 -->
            <h1 class="text-3xl text-center relative w-20 mx-auto ">
                الموسوعة
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h1>
            <div class="pb-10">
                <div class="search-input flex justify-between mt-6 lg:mt-1 ">
                    <input type="text" placeholder="بحث فى البرامج"
                        class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2 ml-3">
                  <h3 class="text-lg mr-6 text-right relative text-purple-800">
                        أحدث الأسئلة
                        <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                            style="bottom: -1rem"></span>
                    </h3>
                </div>
            </div>
            <div class="ped-slider pt-10 border-t-2 border-gray-300 flex flex-wrap flex-row-reverse text-right ">
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
                <div class="w-1/4 bg-white border border-top-gray-100 p-2 hover:bg-purple-800 hover:text-white transition duration-300">
                    <a href="javascript:void(0);" class="text-gray-700 block hover:text-white transition duration-300"><p>Lorem ipsum dolor sit, amet consectetur </p></a>
                </div>
            </div>
        </div>
        {{-- ENCYCLOPEDIA SLIDER END --}}
{{-- BOOKS START --}}
{{-- bg-white --}}
        <div class="books container mx-auto py-10 ">
            <h1 class="text-3xl text-center relative w-20 mx-auto ">
                المكتبة
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h1>
            <div>
                <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10">
                    <input type="text" placeholder="بحث فى المكتبة "
                        class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2">

                </div>
            </div>
            <div class="books-slider pt-10">
                <div class="h-72 w-full mx-2 border border-purple-800 relative ">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/book.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-gray-800 text-center">أسم الكتاب</h1>
                    </a>

                </div>
            </div>
        </div>
        {{-- BOOKS END --}}
{{-- INSTRACTORS START --}}
{{-- bg-gray-100 --}}
        <div class="instractors container mx-auto py-10 ">
            <h1 class="text-3xl text-center relative w-20 mx-auto ">
                المحاضرين
                <span class="title-underline absolute border-b-4 w-6 border-purple-800 bottom-0 right-1"
                    style="bottom: -1rem"></span>
            </h1>
            <div>
                <div class="search-input flex justify-end mt-6 lg:mt-1 border-b-2 border-gray-300 pb-10">
                    {{-- <input type="text" placeholder="بحث فى المكتبة "
                        class="border border-gray-400 focus:ring-2 focus:outline-none focus:ring-purple-300 focus:border-purple-300 focus:shadow-lg px-2 py-2 rounded-md text-right mr-2"> --}}

                </div>
            </div>
            <div class="instractors-slider pt-10">
                <div class="h-72 w-full mx-2 border border-purple-800 relative ">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>
                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
                <div class="h-72 w-full mx-2 border border-purple-800 relative">
                    <a href="javascript:void(0);" class="">
                        <img data-lazy="{{ asset('images/instractor.jpg') }}" alt="Slider 1" class="w-full h-72">
                        <h1 class="text-white text-md py-3 px-1 absolute bottom-0 right-0 left-0 w-100 bg-purple-900 text-center">أسم المحاضر</h1>
                    </a>

                </div>
            </div>
        </div>
        {{-- INSTRACTORS END --}}
    </div>
    {{-- CONTENT END --}}
<footer class="bg-green-800 text-white font-bold text-md text-center py-3">
    جميع الحقوق محفوظة لمؤسسة مشكاة نور &copy;
</footer>
    {{-- JS FILES --}}
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('css/slick.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
