@extends('main')
@section('title','| '.$berita['judul'])

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>{{ $berita['judul'] }}</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-read">
                        <img alt="" src="{{ $berita['pathGambar'] }}" class="img-fullwidth mb30">
                        <div class="post-text">
                            <p>{{ $berita['deskrip'] }}</p>    
                        </div>
                    </div>
                    <div class="spacer-single"></div>
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