@extends('main')
@section('title','| Pengaduan')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Pengaduan Warga</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan-desa">
        <div class="container">
            <div class="row" style="row-gap: 1.5rem">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body">
                            <h3>Pengaduan Warga Ciasem Baru</h3>
                            <p>Halaman ini bertujuan untuk para warga ciasem untuk memberikan informasi pengaduan kepada kami pengurus desa demi keamanan dan kenyamanan bersama.</p>

                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <i class="fa-solid fa-circle-exclamation"> &nbsp</i>{{ $errors->first() }}
                                </div>
                            @endif
                            @if(session()->has('aduanSuccess'))
                                <div class="alert alert-success" role="alert">
                                    <i class="fa-solid fa-check"> &nbsp</i>Pengajuan anda telah disimpan, terimakasih atas laporan anda.
                                </div>
                            @endif

                            <form id='form_pengaduan' class="form-border" method="post" action='{{ route('savePengaduan') }}' enctype="multipart/form-data">
                                @csrf
                                <div class="field-set">
                                    <label>Pengaduan:</label>
                                    <textarea name="pengaduan" class="form-control">{{ old('pengaduan') }}</textarea>
                                </div>
                                <div class="field-set">
                                    <label>Upload Dokumen Pendukung &nbsp<span data-bs-toggle="tooltip" data-bs-placement="right" title="Format dokumen yang didukung adalah .doc .docx .pdf .jpg .jpeg .png"><i class="fa fa-exclamation-circle"></i></span></label>
                                    <input type="file" name="dokumen" class="form-control mt-1">
                                </div>
                                <button type='button' id='ajukan' class="btn-main color-2 float-end mt-3">Daftar Sekarang</button>
                            </form>
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
    $('#ajukan').click(function(){
        Swal.fire({
            title: 'Validasi Data Anda',
            text: "Yakin data anda sudah benar?",
            icon: 'question',
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya, lanjutkan',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.isConfirmed) {
                $("#ajukan").attr("disabled","true");
                $("#ajukan").html("<b>Memproses...</b>");
                $('#form_pengaduan').submit();
            }
        });
    });
</script>
@endsection