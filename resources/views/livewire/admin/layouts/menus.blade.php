<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="la la-bullseye"></i>
                        <span>@lang('app.home')</span>
                    </a>
                </li>
                @if (admin()->isSuperAdmin())
                    <li>
                        <a href="{{ route('admin.admin.index') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.admins')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.role.index') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.roles')</span>
                        </a>
                    </li>
                @endif

                @if (admin()->can('setting.view'))
                    <li>
                        <a href="{{ route('admin.settings') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.settings')</span>
                        </a>
                    </li>
                @endif
                @if (admin()->can('slider.view'))
                    <li>
                        <a href="{{ route('admin.sliders') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.slider')</span>
                        </a>
                    </li>
                @endif
                @if (admin()->can('about.view'))
                    <li>
                        <a href="{{ route('admin.about.index') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.about_us')</span>
                        </a>
                    </li>
                @endif
                <li
                    class="{{ \Route::current()->getName() == 'admin.contact.index' || \Route::current()->getName() == 'admin.contactinfo.index' ? 'active' : '' }}">
                    @if (admin()->can('contact.info.view') || admin()->can('contact.view'))
                        <a href="javascript:void(0);">
                            <i class="la la-bullseye"></i>
                            {{-- <span class="badge badge-info badge-pill float-right">2</span> --}}
                            <span> @lang('app.contact') </span>
                        </a>
                    @endif
                    <ul class="nav-second-level" aria-expanded="false">
                        @if (admin()->can('contact.info.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.contactinfo.index') }}">@lang('app.info')</a>
                            </li>
                        @endif
                        @if (admin()->can('contact.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.contact.index') }}">@lang('app.messages')</a>
                            </li>
                        @endif



                    </ul>
                </li>

                @if (admin()->can('instractor.view'))
                    <li>
                        <a href="{{ route('admin.instractors') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.instractors')</span>
                        </a>
                    </li>
                @endif
                @if (admin()->can('social.view'))
                    <li>
                        <a href="{{ route('admin.socials') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.socials')</span>
                        </a>
                    </li>
                @endif
                @if (admin()->can('new.view'))
                    <li>
                        <a href="{{ route('admin.news') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.news')</span>
                        </a>
                    </li>
                @endif

                @if (admin()->can('country.view'))
                    <li>
                        <a href="{{ route('admin.countries') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.countries')</span>
                        </a>
                    </li>
                @endif
                @if (admin()->can('level.view'))
                    <li>
                        <a href="{{ route('admin.levels') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.levels')</span>
                        </a>
                    </li>
                @endif
                {{-- <li>
                    <a href="{{ route('admin.encyclopedias') }}">
                        <i class="la la-bullseye"></i>
                        <span>@lang('app.encyclopedia')</span>
                    </a>
                </li> --}}
                @if (admin()->can('contribute.view'))
                    <li>
                        <a href="{{ route('admin.contributes') }}">
                            <i class="la la-bullseye"></i>
                            <span>@lang('app.contributes')</span>
                        </a>
                    </li>
                @endif
                <li
                    class="{{ \Route::current()->getName() == 'admin.programcat.index' || \Route::current()->getName() == 'admin.programsubcat.index' ? 'active' : '' }}">
                    @if (admin()->can('book.view') || admin()->can('book.cat.view') || admin()->can('book.subcat.view'))
                        <a href="javascript:void(0);">
                            <i class="la la-bullseye"></i>
                            {{-- <span class="badge badge-info badge-pill float-right">2</span> --}}
                            <span> @lang('app.books') </span>
                        </a>
                    @endif
                    <ul class="nav-second-level" aria-expanded="false">
                        @if (admin()->can('book.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.books') }}">@lang('app.books')</a>
                            </li>
                        @endif
                        @if (admin()->can('book.cat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.bookcats') }}">@lang('app.categories')</a>
                            </li>
                        @endif
                        @if (admin()->can('book.subcat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.booksubcats') }}">@lang('app.sub_categories')</a>
                            </li>
                        @endif


                    </ul>
                </li>
                <li
                    class="{{ \Route::current()->getName() == 'admin.programcat.index' || \Route::current()->getName() == 'admin.programsubcat.index' ? 'active' : '' }}">
                    @if (admin()->can('playlist.view') || admin()->can('program.view') || admin()->can('program.cat.view') || admin()->can('program.subcat.view'))
                        <a href="javascript:void(0);">
                            <i class="la la-bullseye"></i>
                            {{-- <span class="badge badge-info badge-pill float-right">2</span> --}}
                            <span> @lang('app.programs') </span>
                        </a>
                    @endif
                    <ul class="nav-second-level" aria-expanded="false">

                        @if (admin()->can('playlist.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.playlists') }}">
                                    <span>@lang('app.playlists')</span>
                                </a>
                            </li>
                        @endif
                        @if (admin()->can('program.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.programs') }}">@lang('app.programs')</a>
                            </li>
                        @endif
                        @if (admin()->can('program.cat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.programcats') }}">@lang('app.categories')</a>
                            </li>
                        @endif
                        @if (admin()->can('program.subcat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.programsubcats') }}">@lang('app.sub_categories')</a>
                            </li>
                        @endif


                    </ul>
                </li>

                <li
                    class="{{ \Route::current()->getName() == 'admin.encyclopediacat' || \Route::current()->getName() == 'admin.encyclopediasubcat' ? 'active' : '' }}">
                    @if (admin()->can('question.view') || admin()->can('encyclopedia.view') || admin()->can('encyclopedia.cat.view') || admin()->can('encyclopedia.subcat.view'))
                        <a href="javascript:void(0);">
                            <i class="la la-bullseye"></i>
                            {{-- <span class="badge badge-info badge-pill float-right">2</span> --}}
                            <span> @lang('app.encyclopedia') </span>
                        </a>
                    @endif
                    <ul class="nav-second-level" aria-expanded="false">
                        @if (admin()->can('question.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.questions') }}">@lang('app.questions')</a>
                            </li>
                        @endif
                        @if (admin()->can('encyclopedia.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.encyclopedias') }}">@lang('app.encyclopedia')</a>
                            </li>
                        @endif
                        @if (admin()->can('encyclopedia.cat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.encyclopediacats') }}">@lang('app.categories')</a>
                            </li>
                        @endif
                        @if (admin()->can('encyclopedia.subcat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.encyclopediasubcats') }}">@lang('app.sub_categories')</a>
                            </li>
                        @endif


                    </ul>
                </li>

                <li
                    class="{{ \Route::current()->getName() == 'admin.readcat' || \Route::current()->getName() == 'admin.readsubcat' ? 'active' : '' }}">
                    @if (admin()->can('read.view') || admin()->can('read.cat.view') || admin()->can('read.subcat.view'))
                        <a href="javascript:void(0);">
                            <i class="la la-bullseye"></i>
                            {{-- <span class="badge badge-info badge-pill float-right">2</span> --}}
                            <span> @lang('app.read') </span>
                        </a>
                    @endif
                    <ul class="nav-second-level" aria-expanded="false">
                        @if (admin()->can('read.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.reads') }}">@lang('app.read')</a>
                            </li>
                        @endif
                        @if (admin()->can('read.cat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.readcats') }}">@lang('app.categories')</a>
                            </li>
                        @endif
                        @if (admin()->can('read.subcat.view'))
                            <li class="d-flex align-items-center">
                                <i class="la la-link ml-1"></i>
                                <a href="{{ route('admin.readsubcats') }}">@lang('app.sub_categories')</a>
                            </li>
                        @endif


                    </ul>
                </li>
                <br />
                <br />
                <br />
                <br />
                <br />
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
