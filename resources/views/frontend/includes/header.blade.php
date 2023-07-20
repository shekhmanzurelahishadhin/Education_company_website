<div class="full-width-header home8-style4 main-home">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-2">
                        <div class="logo-cat-wrap">
                            <div class="logo-part">
                                <a href="{{route('front.page')}}">
                                    @php $logo = \App\Models\Logo::latest()->first() @endphp
                                    <img class="normal-logo" src="{{asset($logo->logo_image1??null)}}" alt="">
                                    <img class="sticky-logo" src="{{asset($logo->logo_image??null)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <li class="menu-item {{Request::routeIs('front.page') ? 'current-menu-item' : ''}}"> <a href="{{route('front.page')}}">Home</a>

                                        </li>
                                        <li class="menu-item {{Request::routeIs('about.page') ? 'current-menu-item' : ''}}">
                                            <a href="{{route('about.page')}}">About</a>
                                        </li>

{{--                                        <li class="menu-item {{Request::routeIs('services') ? 'current-menu-item' : ''}}">--}}
{{--                                            <a href="{{route('services')}}">Courses</a>--}}
{{--                                        </li>--}}

                                        <li class="menu-item-has-children">
                                            <a href="#">Our Services</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{route('services')}}">Training Course</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('consultancy.page')}}">Student Consultancy</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('research.page')}}">Research or Publication</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item {{Request::routeIs('blogs.page') ? 'current-menu-item' : ''}}">
                                            <a href="{{route('blogs.page')}}">Blog</a>

                                        </li>
                                        <li class="menu-item {{Request::routeIs('team.page') ? 'current-menu-item' : ''}}">
                                            <a href="{{route('team.page')}}">Instructors</a>
                                        </li>


                                        <li class="menu-item {{Request::routeIs('gallery.page') ? 'current-menu-item' : ''}}">
                                            <a href="{{route('gallery.page')}}">Gallery</a>
                                        </li>
                                        <li class="menu-item {{Request::routeIs('contacts') ? 'current-menu-item' : ''}}">
                                            <a href="{{route('contacts')}}">Contact</a>
                                        </li>

                                                @if(Auth::user()!=null)
                                                    @if(Auth::user()->is_admin == 0)
                                            <li class="menu-item-has-children d-inline d-lg-none">
                                                <a href="#">Profile</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="{{route('user.profile.settings')}}" class="crt-btn btn2 w-100">Profile Settings</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{route('enrollment.page')}}" class="crt-btn btn2 w-100">Enrollments</a>
                                                    </li>
                                                    <div class="cart-btn text-center">
                                                        <a class="crt-btn btn2 w-100" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="">Logout Out</a>
                                                        <form action="{{route('logout')}}" id="logoutForm" method="POST">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </ul>
                                            </li>
                                            @endif
                                                @else

                                                        <a class="readon orange-btn main-home btn-sm d-block text-center d-lg-none" href="{{route('login')}}">Login</a>

                                                @endif




                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->

                        </div>
                    </div>
                    <div class="col-lg-1 text-right">
                        <div class="expand-btn-inner">
                            <ul>
                                @if(Auth::user()!=null)
                                    @if(Auth::user()->is_admin == 0)
                                <li class="user-icon cart-inner no-border mini-cart-active">
                                    <a href="#"><i class="fa fa-user"></i></a>
                                    <div class="woocommerce-mini-cart text-left">
                                        <div class="cart-bottom-part">

                                            <div class="total-price text-center">
                                                <a href="{{route('user.profile.settings')}}" class="crt-btn btn2 w-100">Profile</a>
                                            </div>
                                            <div class="total-price text-center">
                                                <a href="{{route('enrollment.page')}}" class="crt-btn btn2 w-100">Enrollments</a>
                                            </div>

                                            <div class="cart-btn text-center">
                                                <a class="crt-btn btn2 w-100" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="">Logout Out</a>
                                                <form action="{{route('logout')}}" id="logoutForm" method="POST">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    @endif
                                @else
                                    <a class="readon orange-btn main-home btn-sm" href="{{route('login')}}">Login</a>
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

    </header>
    <!--Header End-->
</div>
