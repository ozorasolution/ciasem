@extends('main')
@section('title','')
@section('head')
    <meta content="Desa Ciasem Baru" name="description">
    <meta content="Desa,Ciasem,Baru" name="keywords">
    <meta content="Ivan" name="author">
@endsection

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="spacer-single sm-hide"></div>
        <div class="spacer-double sm-hide"></div>
        <div class="container">
            <div class="row">
                <div class="spacer-10"></div>
                <div class="col-12 text-center">
                    <h3 class="wow fadeIn" data-wow-delay="1.1s" data-wow-duration="1s">Selamat Datang di</h3>
                    <h1 class="wow fadeIn" data-wow-delay="2s" data-wow-duration="1s">Desa Ciasem Baru</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur-utama">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6 p-2">
                    <a href="{{ route('layanan') }}" class="fitur-box">
                        <img src="{{ asset('assets/images/icons/layanan.png') }}">
                        <h4>Pengajuan</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <a href="{{ route('profile.pengajuan') }}" class="fitur-box">
                        <img src="{{ asset('assets/images/icons/tanya.png') }}">
                        <h4>Cek Bantuan</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <a href="{{ route('pengaduan') }}" class="fitur-box">
                        <img src="{{ asset('assets/images/icons/ecomplain.png') }}">
                        <h4>Pengaduan</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <a href="#telpDarurat" data-bs-toggle="modal" class="fitur-box">
                        <img src="{{ asset('assets/images/icons/emergency.png') }}">
                        <h4>Telp Darurat</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="d-flex mb-4">
                <div class="info-title">
                    <strong class="text-white"><i class="fa fa-info-circle"></i>&nbsp Info Penting</strong>
                </div>
                <div class="info-message"><marquee>Peringatan penting!!! Space peringatan akan tampil disini</marquee></div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="de-post-type-1">
                        <div class="d-berita d-image">
                            <img alt="" src="/assets/images/berita/Berita_2.jpg" class="lazy">
                        </div>
                        <div class="d-content">
                            <div class="d-meta">
                                <span class="d-by">By Creator</span>
                                <span class="d-date">11 September 2024</span>
                                <span class="d-tags">Teknologi</span>
                            </div>
                            <h4><a href="http://localhost:8000/berita/detail/4">BUMDES <span></span></a></h4>
                            <p>Jumat, 16 Agustus 2024, Desa Ciasembaru mendapat kunjungan dari Kementerian Desa, PDTT untuk melakuk...</p>
                            <a href="http://localhost:8000/berita/detail/4" class="btn-main">Baca selengkapnya</a>
                        </div>
                    </div>
                    <div class="de-post-type-1">
                        <div class="d-berita d-image">
                            <img alt="" src="/assets/images/berita/Berita_3.jpg" class="lazy">
                        </div>
                        <div class="d-content">
                            <div class="d-meta">
                                <span class="d-by">By Creator</span>
                                <span class="d-date">11 September 2024</span>
                                <span class="d-tags">Food</span>
                            </div>
                            <h4><a href="http://localhost:8000/berita/detail/5">PMT (Pemberian Makanan Tambahan)<span></span></a></h4>
                            <p>Dalam upaya meningkatkan kesehatan ibu hamil dan balita serta mencegah stunting, Kepala Desa Ciasemb...</p>
                            <a href="http://localhost:8000/berita/detail/5" class="btn-main">Baca selengkapnya</a>
                        </div>
                    </div>
                    <div class="de-post-type-1">
                        <div class="d-berita d-image">
                            <img alt="" src="/assets/images/berita/Berita_3.jpg" class="lazy">
                        </div>
                        <div class="d-content">
                            <div class="d-meta">
                                <span class="d-by">By Creator</span>
                                <span class="d-date">11 September 2024</span>
                                <span class="d-tags">Pendidikan</span>
                            </div>
                            <h4><a href="http://localhost:8000/berita/detail/6">Pelepasan KKN<span></span></a></h4>
                            <p>Para mahasiswa Universitas Subang (UNSUB) yang telah melaksanakan program Kuliah Kerja Nyata (KKN) di Desa Ciasembaru, resmi ...</p>
                            <a href="http://localhost:8000/berita/detail/6" class="btn-main">Baca selengkapnya</a>
                        </div>
                    </div>
                    {{-- @foreach ($berita as $row)
                        <div class="de-post-type-1">
                            <div class="d-image">
                                <img alt="" src="https://puree.id/desa-api/berita/{{ $row->pathGambar }}" class="lazy">
                            </div>
                            <div class="d-content">
                                <div class="d-meta">
                                    <span class="d-by">By {{ $row->namaUserUpload }}</span>
                                    <span class="d-date">11 September 2024</span>
                                    <span class="d-tags">Teknologi</span>
                                </div>
                                <h4><a href="{{ route('beritaDetail',$row->id) }}">{{ $row->judul }}<span></span></a></h4>
                                <p>{{ $row->deskripsi }}</p>
                                <a href="{{ route('beritaDetail',$row->id) }}" class="btn-main">Baca selengkapnya</a>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
                @include('sideinfo')
            </div>
        </div>
    </section>

    <section id="aparatur" class="px-4">
        <div class="px-md-5 px-0">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Aparatur Desa</h2>
                    <div class="spacer-20"></div>
                    <div class="owl-carousel owl-theme">
                        @foreach ($aparatur as $row)
                            <div class="item">
                                <img src="{{ asset($row['foto']) }}">
                                <h4 class="mt-2">{{ $row['nama'] }}</h4>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <h5>{{ $row['jabatan'] }}</h5>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="item">
                            <img src="{{ asset('/assets/images/aparatur/ivan.jpg') }}">
                            <h4 class="mt-2">1 Artono Ivan</h4>
                            <div class="d-flex justify-content-between flex-wrap">
                                <h5>Kepala Desa</h5>
                                <div class="d-flex sosmed">
                                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="event-desa">
        <div class="container mt-4">
            <div class="row" style="row-gap: 1.5rem">
                <div class="col-12">
                    <h2>Event Desa</h2>
                    <p>Nantikan berbagai acara menarik dari desa kami.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="de-item">
                        <div class="d-event d-img">
                            <img src="/assets/images/event/event1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="d-info p-2">
                            <div class="d-text">
                                <h4>Karnaval Budaya</h4>
                            </div>
                            <div class="d-atr-group">
                                <span class="d-atr"><i class="fa fa-calendar-alt"></i> &nbsp<span style="color: #c20000">11 Agustus 2024</span></span>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn-main mt-2 float-end" href="{{ route('eventDetail',1) }}">Cek Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="de-item">
                        <div class="d-event d-img">
                            <img src="/assets/images/event/event2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="d-info p-2">
                            <div class="d-text">
                                <h4>MOU DENGAN LUVTRIP</h4>
                            </div>
                            <div class="d-atr-group">
                                <span class="d-atr"><i class="fa fa-calendar-alt"></i> &nbsp<span style="color: #c20000">11 Agustus 2024</span></span>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn-main mt-2 float-end" href="{{ route('eventDetail',2) }}">Cek Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="de-item">
                        <div class="d-event d-img">
                            <img src="/assets/images/event/event3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="d-info p-2">
                            <div class="d-text">
                                <h4>PAWAI ALEGORIS</h4>
                            </div>
                            <div class="d-atr-group">
                                <span class="d-atr"><i class="fa fa-calendar-alt"></i> &nbsp<span style="color: #c20000">17 Agustus 2024</span></span>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn-main mt-2 float-end" href="{{ route('eventDetail',3) }}">Cek Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @foreach ($event as $row)
                    <div class="col-lg-3 col-md-6">
                        <div class="de-item">
                            <div class="d-img">
                                <img src="https://puree.id/desa-api/events/{{ $row->pathGambar }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info p-2">
                                <div class="d-text">
                                    <h4>{{ $row->judul }}</h4>
                                </div>
                                <div class="d-atr-group">
                                    <span class="d-atr"><i class="fa fa-calendar-alt"></i> &nbsp<span style="color: #c20000">{{ $row->tgl }}</span></span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a class="btn-main mt-2 float-end" href="{{ route('eventDetail',$row->id) }}">Cek Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>

    <div class="modal fade" id="telpDarurat" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <h3 class="text-center">List Kontak Darurat</h3>
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-6 p-2">
                            <a href="https://polri.go.id" target="_blank" class="darurat-box">
                                <img src="{{ asset('assets/images/icons/polisi.png') }}">
                                <h4>Polisi</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 p-2">
                            <a href="https://instagram.com/damkar_subang" target="_blank" class="darurat-box">
                                <img src="{{ asset('assets/images/icons/damkar.png') }}">
                                <h4>Damkar</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 p-2">
                            <a href="https://instagram.com/uptd.puskesmas.ciasem" target="_blank" class="darurat-box">
                                <img src="{{ asset('assets/images/icons/puskesmas.png') }}">
                                <h4>Puskesmas</h4>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 p-2">
                            <a href="https://subang.go.id" target="_blank" class="darurat-box">
                                <img src="{{ asset('assets/images/icons/pengaduan.png') }}">
                                <h4>Layanan</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        @if(session('back_to_section'))
            $('html, body').animate({
                scrollTop: $("{{ session('back_to_section') }}").offset().top
            }, 1000);
        @endif

        $(".owl-carousel").owlCarousel({
            center: true,
            // stagePadding: 30,
            // items:1,
            thumbs: false,
            loop:true,
            margin:50,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:5,
                }
            }
        });
    });
</script>
@endsection
