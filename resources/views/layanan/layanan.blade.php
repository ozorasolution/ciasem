@extends('main')
@section('title','| Layanan')
@section('head')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
@endsection

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Layanan Desa</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan-desa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-search"></i>&nbsp Cari</span>
                        <input type="text" id="searcLayanan" class="form-control" placeholder="Cari layanan desa disini">
                    </div>
                </div>
            </div>

            <div class="row grid-layanan" style="gap: .5rem">
                @foreach ($datalayanan as $row)
                    <div class="col-lg-3 col-md-4 col-6 layanan-child">
                        <a href="/layanan/{{ $row->slug }}">
                            <div class="layanan-list">
                                <img src="{{ asset('assets/images/icons/document.png') }}">
                                <h5>{{ $row->layanan }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        // Set same height di class layanan-child
        var maxHeight = 0;
        $('.layanan-child').each(function() {
            var currentHeight = $(this).height();
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });
        $('.layanan-child').height(maxHeight);

        var $grid = $('.grid-layanan').isotope({
            itemSelector: '.layanan-child',
            layoutMode: 'fitRows',
        });

        $('#searcLayanan').on('input', function() {
            const searchText = $('#searcLayanan').val();
            if(searchText != '')
                $grid.isotope({
                    filter: function() {
                        var name = $(this).find('.layanan-list h5').text();
                        var regex = new RegExp(searchText, 'i'); // 'i' untuk case-insensitive
                        return regex.test(name);
                    }
                });
            else
                $grid.isotope({ filter: '*' });
        });
    });
</script>
@endsection
