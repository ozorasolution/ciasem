@extends('main')
@section('title','| Pendaftaran Warga')

@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/assets/images/background/bg-header.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Pendaftaran Warga Baru</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Belum memiliki akun? Daftar sekarang.</h3>
                    <p>Mendaftar akun untuk mendapatkan benefit lainnya dari website maupun aplikasi Ciasem Baru untuk mengurus pengajuan, berita dan event terkini, dan masih banyak lagi.</p>
                    
                    <div class="spacer-10"></div>
                    
                    <div class="card">
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <i class="fa-solid fa-circle-exclamation"> &nbsp</i>{{ $errors->first() }}
                                </div>
                            @endif
                            @if(session()->has('daftarSuccess'))
                                <div class="alert alert-success" role="alert">
                                    <i class="fa-solid fa-check"> &nbsp</i>Berhasil melakukan pendaftaran, silakan <u><a href="{{ route('login') }}">Login</a></u> untuk melanjutkan.
                                </div>
                            @endif

                            <form id='form_register' class="form-border" method="post" action='{{ route('register') }}'>
                                @csrf
                                <h4>Data Kunci</h4>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="field-set">
                                                    <label>NIK: <span style="color:red;">&nbsp &nbsp* Isi sesuai nomor KTP</span></label>
                                                    <input type='text' name='nik' class="form-control" value="{{ old('nik') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-2">
                                <h4 class="mt-3">Kontak</h4>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>No. Telefon / WA:</label>
                                            <input type='text' name='notelp' class="form-control" value="{{ old('notelp') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Aktif:</label>
                                            <input type='text' name='email' class="form-control" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-2">
                                <h4 class="mt-3">Password Pengguna</h4>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='password' name='password' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Isi Ulang Password:</label>
                                            <input type='password' name='password_confirmation' class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-2">
                                <h4 class="mt-3">Biodata</h4>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Nama Lengkap:</label>
                                            <input type='text' name='nama' class="form-control" value="{{ old('nama') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="field-set">
                                                    <label>Tempat Lahir:</label>
                                                    <input type='text' name='tempat_lahir' class="form-control" value="{{ old('tempat_lahir') }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="field-set">
                                                    <label>Tanggal Lahir:</label>
                                                    <input type='date' name='tanggal_lahir' class="form-control" value="{{ old('tanggal_lahir') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Jenis Kelamin:</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="pria" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="pria">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Agama:</label>
                                            <select name="agama" class="form-control">
                                                <option value="">-- Pilih Agama --</option>
                                                @foreach ($agama as $row)
                                                    <option value="{{ $row->agama }}" {{ old('agama') == $row->agama ? 'selected' : '' }}>{{ $row->agama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Golongan Darah:</label>
                                            <select name="blood" class="form-control">
                                                <option value="">-- Pilih Golongan Darah --</option>
                                                @foreach ($gol_darah as $row)
                                                    <option value="{{ $row->darah }}" {{ old('blood') == $row->darah ? 'selected' : '' }}>{{ $row->darah }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Pendidikan:</label>
                                            <select name="pendidikan" class="form-control">
                                                <option value="">-- Riwayat Pendidikan --</option>
                                                @foreach ($pendidikan as $row)
                                                    <option value="{{ $row->pendidikan }}" {{ old('pendidikan') == $row->pendidikan ? 'selected' : '' }}>{{ $row->pendidikan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Status Kawin:</label>
                                            <select name="kawin" class="form-control">
                                                <option value="">-- Riwayat Status Kawin --</option>
                                                @foreach ($status_kawin as $row)tanggal_lahir
                                                    <option value="{{ $row->status_kawin }}" {{ old('kawin') == $row->status_kawin ? 'selected' : '' }}>{{ $row->status_kawin }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Kewarganegaraan:</label>
                                            <select name="warga" class="form-control">
                                                <option value="">-- Riwayat Kewarganegaraan --</option>
                                                @foreach ($warga as $row)
                                                    <option value="{{ $row->warga }}" {{ old('warga') == $row->warga ? 'selected' : '' }}>{{ $row->warga }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Pekerjaan:</label>
                                            <select name="pekerjaan" class="form-control">
                                                <option value="">-- Pilih Pekerjaan --</option>
                                                @foreach ($pekerjaan as $row)
                                                    <option value="{{ $row->pekerjaan }}" {{ old('pekerjaan') == $row->pekerjaan ? 'selected' : '' }}>{{ $row->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-2">
                                <h4 class="mt-3">Alamat</h4>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Alamat:</label>
                                            <textarea name='alamat' rows="3" class="form-control">{{ old('alamat') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="field-set">
                                                    <label>RT:</label>
                                                    <input type='number' name='rt' step="1" class="form-control" value="{{ old('rt') }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="field-set">
                                                    <label>RW:</label>
                                                    <input type='number' name='rw' step="1" class="form-control" value="{{ old('rw') }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="field-set">
                                                    <label>Dusun:</label>
                                                    <input type='text' name='dusun' class="form-control" value="{{ old('dusun') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 mt-4">
                                        <button type='button' id='register' class="btn-main color-2 float-end">Daftar Sekarang</button>
                                    </div>
                                </div>
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
    $('#register').click(function(){
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
                $("#register").attr("disabled","true");
                $("#register").html("<b>Memproses...</b>");
                $('#form_register').submit();
            }
        });
    });
</script>
@endsection