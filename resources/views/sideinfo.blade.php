<div id="sidebar" class="col-md-4 mt-4">
    <div class="sticky-top" id="desa-sideinfo">
        <div class="de-item jam text-center">
            <h4>{{ $tanggal }}</h4>
            <span id="jam"></span>
        </div>

        @if(!Auth::check())
            <div class="d-none d-md-block">
                <div class="card mt-3" id="loginform">
                    <div class="card-header side-info">
                        <h4>Layanan Mandiri</h4>
                    </div>
                    <div class="card-body">
                        @if(session()->has('loginError'))
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-exclamation-circle"></i> &nbsp<span>NIK atau password anda salah!</span>
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NIK / No. KTP</label>
                                <input type="text" name="nik" class="form-control" placeholder="Input 16 digit NIK">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password anda">
                            </div>
                            <button type="submit" class="btn-main float-end"><i class="fa fa-lock"></i>&nbsp Masuk</button>
                        </form>                    
                    </div>
                    <div class="card-footer">
                        <div class="text-center">Belum punya akun? Silakan daftar <u><a href="{{ route('register') }}">disini</a></u></div>
                    </div>
                </div>
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-header side-info">
                <h4>Info Jam Kerja</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>HARI</td>
                            <td>JAM MULAI</td>
                            <td>JAM SELESAI</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: 600">Senin</td>
                            <td class="text-center">08:00</td>
                            <td class="text-center">16:00</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Selasa</td>
                            <td class="text-center">08:00</td>
                            <td class="text-center">16:00</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Rabu</td>
                            <td class="text-center">08:00</td>
                            <td class="text-center">16:00</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Kamis</td>
                            <td class="text-center">08:00</td>
                            <td class="text-center">16:00</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Jumat</td>
                            <td class="text-center">08:00</td>
                            <td class="text-center">16:00</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Sabtu</td>
                            <td colspan="2" style="text-align: center; color: red;">Libur</td>
                        </tr>
                        <tr>
                            <td style="font-weight: 600">Minggu</td>
                            <td colspan="2" style="text-align: center; color: red;">Libur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header side-info">
                <h4>Recent Posts</h4>
            </div>
            <div class="card-body">
                <div class="widget widget-post my-0 pb-0" style="background-size: 100%; background-repeat: no-repeat;">
                    <ul class="de-bloglist-type-1">
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="https://puree.id/desa-api/informasi/info1-square.jpg" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">
                                <a href="#"><h4>Pekan Gembira Ria</h4></a>
                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">29 September 2024</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/25/poster-hut-kemerdekaan-ri-ke-78-2.png?w=1080" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">
                                <a href="#"><h4>Lomba 17 Agustus</h4></a>
                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">17 Agustus 2024</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="https://puree.id/desa-api/informasi/info4-square.jpg" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">
                                <a href="#"><h4>Rapat Koordinasi Kepegawaian 2023</h4></a>
                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">11 September 2024</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>