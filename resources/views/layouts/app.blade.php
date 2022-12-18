<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>CROWTECH</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
        <div class="header_logo_div">
            <a class="" href="{{ route('index') }}">
                <img src="{{ asset('img/logo.png') }}" class="logo_img" alt="">
            </a>
        </div>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check" onclick="clickMenuBtn()">
            <label for="menu-btn-check" class="menu-btn" id="menu-btn"><span></span></label>
            <div class="menu-content" id="menu-content">
                <div class="menu_column">
                    <a href="{{ route('design') }}" class="menu_a"><img src="{{ asset('img/icon_design.png') }}" class="menu_img">Design</a>
                    <a href="{{ route('product') }}" class="menu_a"><img src="{{ asset('img/icon_product.png') }}" class="menu_img">Product viewer</a>
                </div>
                <div class="menu_column">
                    <a href="{{ route('web') }}" class="menu_a"><img src="{{ asset('img/icon_web.png') }}" class="menu_img">Web creation</a>
                    <a href="{{ route('contact') }}" class="menu_a"><img src="{{ asset('img/icon_contact.png') }}" class="menu_img">Contact</a>
                </div>
                <div class="menu_column" style="margin: 30px 0;">
                    <a href="{{ route('engineer') }}" class="menu_a"><img src="{{ asset('img/icon_engineer.png') }}" class="menu_img">Engineering</a>
                    <a href="{{ route('about') }}" class="menu_a"><img src="{{ asset('img/icon_about.png') }}" class="menu_img">About us</a>
                </div>
                <div class="menu_column" style="margin: 30px 0;">
                    <a href="{{ route('plan') }}" class="menu_a"><img src="{{ asset('img/icon_plan.png') }}" class="menu_img">Planning</a>
                </div>
            </div>
        </div>

        @if (\Route::currentRouteName() != 'index')
        <div class="page_name">
            <span id="page_name">@yield('page_name')</span>
        </div>
        @endif

        @yield('content')

        </body>
    </div>
    @else
    <div id="registration_sp">
        <body>
            <header class="header_sp" style="">
                @if (\Route::currentRouteName() != 'index')
                <a class="logo_a_sp" href="{{ route('index') }}">
                    <img src="{{ asset('img/sp_top_logo.png') }}" class="logo_img_sp" alt="">
                </a>
                @endif
                <div class="hamburger-menu"
                @if (\Route::currentRouteName() == 'index') style="padding-top: 30px;" @endif >
                    <input type="checkbox" id="menu-btn-check" onclick="clickMenuBtn()">
                    <label for="menu-btn-check" class="menu-btn" id="menu-btn"><span></span></label>
                    <div class="menu-content" id="menu-content">
                        <input type="checkbox" id="menu-btn-check2" onclick="clickMenuBtn2()">
                        <label for="menu-btn-check2" class="menu-btn2" id="menu-btn2"><span></span></label>
                        <ul>
                            <li>
                                <a href="{{ route('about') }}" class="menu_content_sp">About</a>
                            </li>
                            <li>
                            <a href="#" class="menu_content_sp" onclick="clickService()">Service</a>
                            </li>
                            <li class="service_list" id="service_list">
                                <a href="{{ route('graphic') }}" class="service_column_sp">Graphic Design</a>
                                <a href="{{ route('web') }}" class="service_column_sp">Web Design</a>
                                <a href="{{ route('media') }}" class="service_column_sp">Media Design</a>
                                <a href="{{ route('photo') }}" class="service_column_sp">Photo + Movie</a>
                            </li>
                            <li>
                            <a href="{{ route('recruit') }}" class="menu_content_sp">Recruit</a>
                            </li>
                            <li>
                            <a href="{{ route('contact') }}" class="menu_content_sp">Contact</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </header>
            <div class="header_page_flex_sp">
                @yield('header_page_sp')
            </div>
            @yield('content_sp')
        </body>
    </div>
    @if (\Route::currentRouteName() != 'shop_list') <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script> @endif
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick_js') }}"></script>

    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>