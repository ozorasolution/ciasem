<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desa Ciasem Baru | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('/assets/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('/assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link id="colors" href="{{ asset('/assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/ozora.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="login-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-4" style="text-align: center; padding: 2rem;">
                    <div class="text-center">
                        <img src="{{ asset('/assets/images/logo.jpg') }}" alt="Logo Ciasem" style="max-width: 40%">
                    </div>
                    <h4 class="my-3">Masuk Untuk Melanjutkan</h4>

                    @if(session()->has('loginError'))
                        <div class="alert alert-danger text-start mt-2" role="alert">
                            <i class="fa fa-exclamation-circle"></i> &nbsp<span>NIK / password anda salah!</span>
                        </div>
                    @endif
                    <form class="form-border" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="field-set">
                            <label class="form-label float-left"><b>NIK / No. KTP</b></label>
                            <input type="text" name="nik" class="form-control" placeholder="Input 16 digit NIK" />
                        </div>
                        <div class="field-set mt-3">
                            <label class="form-label float-left"><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="Password anda" />
                        </div>

                        <div class="row align-items-center mt-3">
                            <div class="col-md-8">
                                <p class="text-start">
                                    <i class="fa fa-exclamation-circle" style="color: #ffa915"></i> &nbsp Hubungi operator desa untuk memperoleh kode akses atau jika anda lupa kode akses.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn-main float-end"><i class="fa fa-lock"></i>&nbsp Masuk</button>
                            </div>
                        </div>

                        <div class="align-items-center mt-3">
                            Belum punya akun? Silakan daftar <u><a href="{{ route('register') }}">disini</a></u>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>