@extends('main')
@section('title','| Event Desa')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Event Desa</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan-desa">
        <div class="container">
            <div class="row" style="row-gap: 1.5rem">
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
            </div>
        </div>
    </section>
</div>
@endsection