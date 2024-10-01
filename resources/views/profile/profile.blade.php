@extends('main')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>@yield('profile-title')</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>

    <section id="section-cars" class="bg-gray-100">
        <div class="container">
            <div class="row">
                @include('profile.profile-nav')

                @yield('profile-content')
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