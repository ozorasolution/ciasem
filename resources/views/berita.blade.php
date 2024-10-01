@extends('main')
@section('title','| Berita Desa')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Berita Desa</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan-desa">
        <div class="container">
            <div class="row" style="row-gap: 1.5rem">
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
                            <h4><a href="{{ route('beritaDetail',4) }}">BUMDES <span></span></a></h4>
                            <p>Jumat, 16 Agustus 2024, Desa Ciasembaru mendapat kunjungan dari Kementerian Desa, PDTT untuk melakuk...</p>
                            <a href="{{ route('beritaDetail',4) }}" class="btn-main">Baca selengkapnya</a>
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
                            <h4><a href="{{ route('beritaDetail',5) }}">PMT (Pemberian Makanan Tambahan)<span></span></a></h4>
                            <p>Dalam upaya meningkatkan kesehatan ibu hamil dan balita serta mencegah stunting, Kepala Desa Ciasemb...</p>
                            <a href="{{ route('beritaDetail',5) }}" class="btn-main">Baca selengkapnya</a>
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
                            <h4><a href="{{ route('beritaDetail',6) }}">Pelepasan KKN<span></span></a></h4>
                            <p>Para mahasiswa Universitas Subang (UNSUB) yang telah melaksanakan program Kuliah Kerja Nyata (KKN) di Desa Ciasembaru, resmi ...</p>
                            <a href="{{ route('beritaDetail',6) }}" class="btn-main">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="col-md-4">
                    <div class="sticky-top" id="desa-sideinfo">
                        <div class="card">
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

                                <div class="widget widget_tags mt-5">
                                    <h4>Popular Tags</h4>
                                    <div class="small-border"></div>
                                    <ul>
                                        <li><a href="#link">Art</a></li>
                                        <li><a href="#link">Application</a></li>
                                        <li><a href="#link">Design</a></li>
                                        <li><a href="#link">Entertainment</a></li>
                                        <li><a href="#link">Internet</a></li>
                                        <li><a href="#link">Marketing</a></li>
                                        <li><a href="#link">Multipurpose</a></li>
                                        <li><a href="#link">Music</a></li>
                                        <li><a href="#link">Print</a></li>
                                        <li><a href="#link">Programming</a></li>
                                        <li><a href="#link">Responsive</a></li>
                                        <li><a href="#link">Website</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
    $('#wrapper').css("overflow","visible");
</script>
@endsection