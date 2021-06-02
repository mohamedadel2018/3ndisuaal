<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title) ? $title : 'Default Meta Title' }}</title>
    <meta name="description"
        content="{{ isset($meta_description) ? $meta_description : 'Default Meta Description' }}">
    <meta name="author" content="مؤسسة مشكاة نور Mishkat Noor Foundation Yayasan Mishkat Noor">
    {{-- graph meta --}}
    <meta property="og:type" content="Foundation مؤسسة Yayasan" />
    <meta property="og:title" content="{{ isset($og_title) ? $og_title : $setting->translate('meta_title') }}" />
    <meta property="og:description"
        content="{{ isset($og_description) ? $og_description : $setting->translate('meta_descrption') }}" />
    <meta property="og:image" content="{{ isset($og_image) ? $og_image : asset('images/logo-2-'.app()->getLocale().'.png') }}" />
    <meta property="og:url" content="{{ isset($og_url) ? $og_url : url('/') }}" />
    <meta property="og:site_name" content="{{ isset($og_site_name) ? $og_site_name : __('app.og_site_name') }}" />
    {{-- twitter meta --}}
    <meta name="twitter:title"
        content="{{ isset($twitter_title) ? $twitter_title : $setting->translate('meta_title') }}">
    <meta name="twitter:description"
        content="{{ isset($twitter_description) ? $twitter_description : $setting->translate('meta_descrption') }}">
    <meta name="twitter:image" content="{{ isset($twitter_image) ? $twitter_image : asset('images/logo-2.png') }}">
    <meta name="twitter:site" content="{{ isset($twitter_site) ? $twitter_site : url('/') }}">
    <meta name="twitter:creator" content="مؤسسة مشكاة نور Mishkat Noor Foundation Yayasan Mishkat Noor">
    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/Pic-01.png') }}">
    @livewireStyles
    @stack('css')
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> 
     {{-- new style --}}
      <link href="{{ asset('css/assets/vendor/aos/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/css/style.css') }}" rel="stylesheet"> 
</head>

<body class="antialiased font-almarai">
    @if( app()->getLocale() == 'ar')
        <header id="header" class="header direction-rtl fixed-top d-flex align-items-center ">
     @else 
       <header id="header" class="header  fixed-top d-flex align-items-center ">
    @endif
                <div class="container d-flex align-items-center justify-content-between">
            
                  <div id="logo">
                    <h1>  <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-2-' . app()->getLocale() . '.png') }}" 
                         alt="logo"  class="h-32 w-36 ml-auto">
                    </a>
                    <!-- Uncomment below if you prefer to use an image logo -->
                   {{-- <a href="{{ url('/') }}""><img src="assets/img/logo.png" alt="" title="" /></a> --}}
                  </div>
            
                  <nav id="navbar" class="navbar">
                <ul>
               
                <li class="text-xl ml-3"> 
                        <a href="{{ url('/') }}">
                        <span>@lang('app.home')</span>
                        <i class="fas fa-home"></i>
                        </a>
                </li>
                <li> 
                        <a href="{{ route('about') }}">
                        <span>@lang('app.about_us')</span>
                        <i class="fas fa-address-card"></i>
                        </a>
                </li>
                <li> 
                        <a href="{{ route('encyclopedia.cat') }}">
                        <span>@lang('app.encyclopedia')</span>
                        <i class="fas fa-question-circle"></i>
                        </a>
                </li>
                <li>
                        <a href="{{ route('books.cat') }}">
                        <span>@lang('app.books')</span>
                        <i class="fas fa-book"></i>
                        </a>
                </li>
                <li>
                        <a href="{{ route('programs.cat') }}">
                        <span>@lang('app.programs')</span>
                        <i class="fas fa-play"></i>
                        </a>
                </li>
                <li> 
                        <a  class="text-gray-900 bg-transparent rounded-lg hover:bg-white " href="{{ route('participate') }}">
                        <span>@lang('app.participate')</span>
                        <i class="fas fa-share-square"></i>
                    </a>
                </li>
                <li>
                        <a href="{{ route('contact') }}">
                        <span>@lang('app.call_us')</span>
                        <i class="fas fa-phone"></i>
                        </a>
                </li>
                <li>
                        <li class="dropdown"><a href="#"> <span>@lang('app.languages')</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li> <a href="{{ route('languages', ['ar']) }}">@lang('app.arabic')</a></li>
                        <li><a href="{{ route('languages', ['en']) }}">@lang('app.english')</a></li>
                        <li><a href="{{ route('languages', ['id']) }}">@lang('app.indonesia')</a> </li>
                        </ul>
                </li>
                </li>
               
               
              
               
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
                </div>
              </header>
              <!-- End Header -->
    {{-- NAVBAR START --}}
    {{-- <div class="bg-gray-300 border-b border-gray-400 h-32 flex items-center shadow-2xl">
        <div class="w-4/5">
            <ul class="flex">
                <li class="text-xl ml-3 dropdown  relative">
                 
                    <a href="javascript:void(0);"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300 hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.languages')</span>
                        <i class="fas fa-caret-down"></i>

                    </a>
                    <ul
                        class="dropdown-menu absolute hidden text-gray-700 mt-5 z-10 border border-gray-400 rounded py-2 bg-white">
                        <li class="">
                            <a class="rounded-t bg-white hover:bg-white hover:text-gray-900 text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['ar']) }}">@lang('app.arabic')</a>
                        </li>
                        <li class=""><a
                                class="bg-white hover:bg-white hover:text-gray-900 text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['en']) }}">@lang('app.english')</a>
                        </li>
                        <li class=""><a
                                class="rounded-b bg-white hover:bg-white hover:text-gray-900 text-center py-2 px-5 block whitespace-no-wrap"
                                href="{{ route('languages', ['id']) }}">@lang('app.indonesia')</a></li>
                    </ul>

                </li>

                <li class="text-xl ml-3">
                    <a href="{{ route('contact') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.call_us')</span>
                        <i class="fas fa-phone"></i>
                    </a>
                </li>
                <li class="text-xl ml-3">
                    <a href="{{ route('participate') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.participate')</span>
                        <i class="fas fa-share-square"></i>
                    </a>
                </li>
                <li class="text-xl ml-3">
                    <a href="{{ route('programs.cat') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.programs')</span>
                        <i class="fas fa-play"></i>
                    </a>
                </li>
                <li class="text-xl ml-3">
                    <a href="{{ route('books.cat') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.books')</span>
                        <i class="fas fa-book"></i>
                    </a>
                </li>
                <li class="text-xl ml-3">
                    <a href="{{ route('encyclopedia.cat') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.encyclopedia')</span>
                        <i class="fas fa-question-circle"></i>
                    </a>
                </li>


                <li class="text-xl ml-3">
                    <a href="{{ route('about') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300  hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.about_us')</span>
                        <i class="fas fa-address-card"></i>
                    </a>
                </li>

                <li class="text-xl ml-3">
                    <a href="{{ url('/') }}"
                        class="text-gray-900 bg-transparent rounded-lg hover:bg-white border border-gray-300 hover:border-gray-300 transition py-5 px-2">
                        <span>@lang('app.home')</span>
                        <i class="fas fa-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-1/5">
            <div class="bg-gray-100 border border-gray-500 w-40 h-40 rounded-full ml-auto mr-5 mt-10">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-2-' . app()->getLocale() . '.png') }}" class="h-36 w-36 ml-auto"
                        alt="logo">
                </a>
            </div>
        </div>
    </div> --}}
    {{-- NAVBAR END --}}
    <div class="edit-nav"></div>
    {{ isset($cover) ? $cover : '' }}
    {{-- CONTENT START --}}
    {{ $slot }}
    {{-- CONTENT END --}}
    {{-- FIXED SECTION START --}}
    <div class="fixed left-0 mt-4 top-44 w-20 h-52 flex flex-col justify-between border border-yellow-700 bg-white">
        <a href="{{ route('question') }}" title="@lang('app.ask_qustion')">
            <img class=" animate-pulse w-52" src="{{ asset('images/ask.png') }}"
                alt="@lang('app.alt_tag')">
              <h6 class="bg-yellow-400 text-xs text-center h-8 flex justify-center items-center">@lang('app.ask_qustion')</h6>
        </a>
        <a href="javascript:void(0);" class="border-b-2"></a>
        <a href="{{ route('answer') }}"  title="@lang('app.query_question')">
            <img class=" animate-pulse w-52" src="{{ asset('images/answer.png') }}"
                alt="@lang('app.alt_tag')">
                <h6 class="bg-yellow-400 text-xs text-center">@lang('app.query_question')</h6>
        </a>
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section
          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>@lang('app.Get_connected_with_us')</span>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
            <a href="https://www.facebook.com/3endisual/?ref=page_internal"target="_blank" class="me-4 text-reset">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/3ndisual?fbclid=IwAR3NaqgFOJcCgoAEki4erk4KwTS2dAspx7DOrYFhhKQMdVmPdi8nkPyRAso" 
                target="_blank" class="me-4 text-reset">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCWnHN_ayUThXtjp51u5qGbw" 
            target="_blank" class="me-4 text-reset">
            <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.instagram.com/3ndisual/?fbclid=IwAR3xVcDO-3D2km71MokuQQPHjREgB7QEuiiPKLEIYKYxsfowFhFoKi5Vtmg" 
                target="_blank" class="me-4 text-reset">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://soundcloud.com/3ndi-suaal" 
            target="_blank" class="me-4 text-reset">
            <i class="fab fa-soundcloud"></i>
            </a>
           
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h5 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i> @lang('app.3ndisuaal')
                </h5>
                <p>
                   <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-2-' . app()->getLocale() . '.png') }}" 
                     alt="logo"  class="h-32 w-36">
                 </a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4">
                        @lang('app.Products') 
                </h5>
                <p>
                        <a href="{{ route('about') }}">
                                <span>@lang('app.about_us')</span>
                               
                                </a>
                </p>
                <p>
                        <a href="{{ route('encyclopedia.cat') }}">
                                <span>@lang('app.encyclopedia')</span>
                                
                                </a>
                </p>
                <p>
                        <a href="{{ route('books.cat') }}">
                                <span>@lang('app.books')</span>
                                
                                </a>
                </p>
                <p>
                        <a href="{{ route('programs.cat') }}">
                                <span>@lang('app.programs')</span>
                                
                                </a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4">
                   @lang('app.Useful_links')
                </h5>
                <p>
                  <a href="https://www.mishkatnour.org/" target="_blank" class="text-reset">@lang('app.Mishkat_Nour_site')</a>
                </p>
                
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4">
                        @lang('app.contact') 
                </h5>
                <p><i class="fas fa-home me-3"></i>@lang('app.address_mishkat')
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.330725951903!2d31.354616515325546!3d30.05605312497868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583dd855877fbf%3A0x505d44f95cd401a8!2s126%20Mostafa%20El-Nahaas%2C%20Al%20Manteqah%20Ath%20Thamenah%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1622540225596!5m2!1sen!2seg"  width="250" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  <a href = "mailto: 3ndisuaal@3ndisuaal.com"> 3ndisuaal@3ndisuaal.com</a>
                </p>
                {{-- <p><i class="fas fa-phone me-3"></i> <a href="tel:123-456-7890">123-456-7890</a>                    + 01 234 567 88</p> --}}
              
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="bg-gray-800 text-white font-bold text-md text-center py-3" >
                @lang('app.copyrights') &copy;
          {{-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    
    {{-- FIXED SECTION END --}}

    {{-- <footer class="bg-gray-800 text-white font-bold text-md text-center py-3">
        @lang('app.copyrights') &copy;
    </footer> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    {{-- JS FILES --}}
    @livewireScripts
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('css/slick.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('js')
      {{-- new js --}}
     <script src="{{ asset('css/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('css/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('css/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ asset('css/assets/js/main.js') }}"></script> 
</body>

</html>
