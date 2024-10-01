<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desa Ciasem Baru @yield('title')</title>
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('/assets/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('/assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link id="colors" href="{{ asset('/assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>

    <link href="{{ asset('/assets/css/ozora.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div id="wrapper"style="background: red">
        <div id="de-preloader"></div>

        @include('nav')
        @yield('content')

        <a href="#" id="back-to-top"></a>

        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-4">
                        <div class="widget text-center">
                            <h3>Desa Ciasem Baru</h3>
                            <div class="row">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('/assets/images/logo.png') }}" style="max-width: 100%;">
                                </div>
                                <div class="col-8 d-flex align-items-center text-wrap">Website Desa Ciasem Baru Kec. Ciasem, Kab. Subang, Prov. Jawa Barat.</div>
                            </div>
                            <div class="social-icons mt-4">
                                <a href="#"><i class="fa fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget text-center">
                            <h3>Hubungi Kami</h3>
                            <address class="s1 text-center">
                                Dsn. Margatani Desa Ciasembaru Kec. Ciasem Kab. Subang 41256
                                <br><br>
                                Telepon/Fax: +6282214069147<br>
                                Email: pemdesciasembaru@gmail.com
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget text-center">
                            <h3>Jelajahi</h3>
                            <ul>
                                <li><a href="{{ route('layanan') }}">Layanan</a></li>
                                <li><a href="{{ route('event') }}">Event</a></li>
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="{{ route('profiledesa') }}">Profil Desa</a></li>
                                <li><a href="{{ route('privacypol') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container text-center">
                    <a href="index.html">Copyright 2024 - Ciasem baru</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/designesia.js') }}"></script>
    <script>
        $('.logout').click(function(){
            Swal.fire({
                title: 'Logout',
                text: "Anda yakin ingin keluar?",
                icon: 'question',
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ya, lanjutkan',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type : "POST",
                        url : "{{ route('logout') }}",
                        success:function(data){
                            window.location.href= "/";
                        }
                    });
                }
            });
        });

        function updateTime() {
            let now = new Date();

            let hours = now.getHours().toString().padStart(2, '0');
            let minutes = now.getMinutes().toString().padStart(2, '0');
            let seconds = now.getSeconds().toString().padStart(2, '0');

            let currentTime = `${hours}:${minutes}:${seconds}`;
            $('#jam').html(currentTime);
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>
    @yield('script')
</body>
</html>
