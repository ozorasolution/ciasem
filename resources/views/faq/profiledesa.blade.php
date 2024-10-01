@extends('main')
@section('title','| Profile Desa')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Profile Desa</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Profile Desa Ciasem Baru</h2>
                        </div>
                        <div class="card-body tentang-desa">
                            <img src="{{ asset('assets/images/tentang/1.png') }}">
                            <img src="{{ asset('assets/images/tentang/2.png') }}">
                            <img src="{{ asset('assets/images/tentang/3.png') }}">
                            <img src="{{ asset('assets/images/tentang/4.png') }}">
                            <img src="{{ asset('assets/images/tentang/5.png') }}">
                            <img src="{{ asset('assets/images/tentang/6.png') }}">
                        </div>
                    </div>
                </div>
                @include('sideinfo')
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