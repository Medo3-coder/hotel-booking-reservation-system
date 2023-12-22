<!doctype html>
<html lang="en">

@include('site.layouts.partial.header')

<body>

    <!-- PreLoader Start -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-cube-area">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- PreLoader End -->

    <!-- Top Header Start -->
    <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 pr-0">
                    <div class="language-list">
                        <select class="language-list-item">
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                            <option>简体中文</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-9 col-md-10">
                    <div class="header-right">
                        <ul>
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <a href="#">123 Virgil A Stanton, Virginia, USA</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                            </li>

                            <li>
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <a href="{{route('showLogin')}}">Login</a>
                            </li>
                            <li>
                                <i class="fa-regular fa-id-card"></i>
                                <a href="{{route('showRegister')}}">Register</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Header End -->

    @include('site.layouts.partial.navbar')

    <!-- Start Navbar Area -->

    <!-- End Navbar Area -->

    @yield('content')

    <!-- Footer Area -->

    @include('site.layouts.partial.footer')

    <!-- Footer Area End -->

</body>

</html>
