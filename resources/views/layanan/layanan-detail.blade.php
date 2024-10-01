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
                        <h1>{{ $detail }}</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="btn-main float-end" href="{{ route('layanan') }}"><i class="fa-solid fa-arrow-left"></i>&nbsp <b>Kembali</b></a>
                </div>
            </div>

            <div class="row mt-4" style="row-gap: 1.5rem">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-tentang-tab" data-bs-toggle="pill" data-bs-target="#pills-tentang" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>Tentang</b></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-ketentuan-tab" data-bs-toggle="pill" data-bs-target="#pills-ketentuan" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Ketentuan</b></button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
                                    <p>
                                        Halaman ini digunakan untuk anda yang ingin mengajukan permintaan desa terkait
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at quam orci. Vivamus ut leo facilisis, efficitur nibh a, auctor leo. Cras pulvinar mauris sed tortor gravida, ut tincidunt mi ornare. Aliquam facilisis rutrum odio vitae pharetra. Donec eget neque sagittis, posuere felis et, eleifend magna. Curabitur efficitur bibendum porta. Aliquam quis mollis justo. Integer feugiat mi a quam vestibulum ultricies. Mauris at congue orci. Nulla vehicula urna quis risus feugiat, vitae posuere urna elementum.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="pills-ketentuan" role="tabpanel" aria-labelledby="pills-ketentuan-tab">
                                    <p>
                                        Untuk mengajukan surat yang diminta, mohon isi
                                        Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">Data Pengajuan</h3>
                        </div>
                        <div class="card-body">
                            <div id="alert" class="alert" role="alert" style="display: none">
                                <span id="msg"></span>
                            </div>

                            {{-- <form method="POST"> --}}
                                <div class="form-group mb-3">
                                    <label class="form-label">Tujuan</label>
                                    <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Isi tujuan pengajuan">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <input type="text" id="note" name="note" class="form-control" placeholder="Keterangan tambahan">
                                </div>
                                <button id="submit" class="btn-main btn-block mt-3">Submit Pengajuan</button>
                            {{-- </form> --}}

                            <div class="mt-5">
                                <p style="color: red">
                                    <b>* Note :</b> Data pengajuan hanyalah demo, tidak selalu 2 field sesuai dengan kebutuhan pengajuan<br>
                                    Isi "ok" untuk hasil success.
                                </p>
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
    $(document).ready(function(){
    });

    $('#submit').click(function(){
        $(this).html('<i class="fas fa-spinner fa-spin"></i>');
        $(this).attr('disabled',"true");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type : "POST",
            url : "{{ route('submitLayanan') }}",
            data : {
                "tujuan" : $('#tujuan').val(),
                "note" : $('#note').val(),
            },
            success:function(data){
                $('#submit').html('Submit Pengajuan');

                $('#alert').css('display','block');
                $('#alert').removeClass('alert-danger');
                $('#alert').addClass('alert-success');

                $('#msg').html('<i class="fa-solid fa-circle-check"></i> &nbsp' + data.message);
            },
            error:function(error){
                $('#submit').html('Submit Pengajuan');
                $('#submit').attr('disabled',false);

                $('#alert').css('display','block');
                $('#alert').removeClass('alert-success');
                $('#alert').addClass('alert-danger');

                $('#msg').html('<i class="fa fa-exclamation-circle"></i> &nbsp' + error.responseJSON.message);
            }
        });
    });
</script>
@endsection