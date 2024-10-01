<header class="transparent scroll-light has-topbar">
    {{-- <div id="topbar" class="topbar-dark text-light">
        <div class="container">
            <div class="topbar-left xs-hide">
                <div class="topbar-widget">
                    <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a></div>
                    <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@desa.com</a></div>
                    <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Senin - Jumat 08.00 - 16.00</a></div>
                </div>
            </div>

            <div class="topbar-right">
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <div id="logo">
                                <a href="/">
                                    <img class="logo-1" src="{{ asset('/assets/images/logo.png') }}" style="max-height: 70px">
                                    <img class="logo-2" src="{{ asset('/assets/images/logo.png') }}" style="max-height: 70px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item  {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Beranda</a></li>
                            <li><a class="menu-item  {{ request()->routeIs('layanan*') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a></li>
                            <li><a class="menu-item" href="{{ route('event') }}">Event</a></li>
                            <li><a class="menu-item" href="{{ route('berita') }}">Berita</a></li>
                            <li><a class="menu-item" href="#">FAQ</a>
                                <ul>
                                    <li><a class="menu-item" href="{{ route('profiledesa') }}">Profil Desa</a></li>
                                    <li><a class="menu-item" href="{{ route('strukturorg') }}">Struktur Organisasi</a></li>
                                    <li><a class="menu-item" href="{{ route('privacypol') }}">Privacy Policy</a></li>
                                </ul>
                            </li>
                            @if(Auth::check())
                                <li class="d-lg-none d-block"><a class="menu-item" href="#">Info User</a>
                                    <ul>
                                        <li><a class="menu-item" href="{{ route('profile.dashboard') }}"><i class="fa-solid fa-address-book"></i>&nbsp Profile</a></li>
                                        <li><a class="menu-item" href="{{ route('profile.pengajuan') }}"><i class="fa-solid fa-file"></i>&nbsp Cek Pengajuan</a></li>
                                    </ul>
                                </li>
                                <li class="d-lg-none d-block"><a class="menu-item logout">Sign Out</a> &nbsp<i class="fa-solid fa-right-from-bracket"></i></li>
                            @else
                                <li class="d-lg-none d-block"><a class="menu-item" href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-to-bracket" style="transform: scale(-1, 1)"></i>&nbsp Masuk</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        @if(Auth::check())
                            <div class="d-lg-block d-none">
                                <ul id="mainmenu">
                                    <li><a class="menu-item"><i class="fa-regular fa-circle-user"></i>&nbsp &nbsp Hi, &nbsp{{ explode(' ', Auth::user()->nama_lengkap)[0] }}</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('profile.dashboard') }}"><i class="fa-solid fa-address-book"></i>&nbsp Profile</a></li>
                                            <li><a class="menu-item" href="{{ route('profile.pengajuan') }}"><i class="fa-solid fa-file"></i>&nbsp Cek Pengajuan</a></li>
                                            <li><a class="menu-item logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="menu_side_area d-lg-block d-none">
                                <a href="{{ route('login') }}" class="btn-main">Masuk &nbsp&nbsp<i class="fa-solid fa-arrow-right-to-bracket" style="transform: scale(-1, 1)"></i></a>
                            </div>
                        @endif
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
