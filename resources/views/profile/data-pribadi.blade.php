@extends('profile.profile')
@section('title','| Data Pribadi')
@section('profile-title', 'Data Pribadi')

@section('profile-content')
<div class="col-lg-9">
    <div class="card padding30 rounded-5 mb25">
        <div class="card-header"><h3>Update Data Pribadi</h3></div>
        <form id="form_update" action="{{ route('profile.datauserUpdate',Auth::user()->id) }}" method="POST">
            @csrf
            <div class="card-body form-border"> 
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <i class="fa-solid fa-circle-exclamation"> &nbsp</i>{{ $errors->first() }}
                    </div>
                @endif
                @if(session()->has('updateSuccess'))
                    <div class="alert alert-success" role="alert">
                        <i class="fa-solid fa-check"> &nbsp</i>Update data berhasil!
                    </div>
                @endif   

                <h4>Data Kunci</h4>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>NIK:</label>
                                    <input type='text' class="form-control" value="{{ Auth::user()->nik }}" disabled>
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
                            <input type='text' name='notelp' class="form-control" value="{{ Auth::user()->hp }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Email Aktif:</label>
                            <input type='text' name='email' class="form-control" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                </div>

                <hr class="my-2">
                <h4 class="mt-3">Biodata</h4>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Nama Lengkap:</label>
                            <input type='text' name='nama' class="form-control" value="{{ Auth::user()->nama_lengkap }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="field-set">
                                    <label>Tempat Lahir:</label>
                                    <input type='text' name='tempat_lahir' class="form-control" value="{{ Auth::user()->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="field-set">
                                    <label>Tanggal Lahir:</label>
                                    <input type='date' name='tanggal_lahir' class="form-control" value="{{ Auth::user()->tanggal_lahir }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Jenis Kelamin:</label>
                            <input type='text' class="form-control" value="{{ Auth::user()->jenis_kelamin }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Agama:</label>
                            <select name="agama" class="form-control">
                                <option value="">-- Pilih Agama --</option>
                                @foreach ($agama as $row)
                                    <option value="{{ $row->agama }}" {{ Auth::user()->agama == $row->agama ? 'selected' : '' }}>{{ $row->agama }}</option>
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
                                    <option value="{{ $row->darah }}" {{ Auth::user()->golongan_darah == $row->darah ? 'selected' : '' }}>{{ $row->darah }}</option>
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
                                    <option value="{{ $row->pendidikan }}" {{ Auth::user()->pendidikan == $row->pendidikan ? 'selected' : '' }}>{{ $row->pendidikan }}</option>
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
                                    <option value="{{ $row->status_kawin }}" {{ Auth::user()->status_perkawinan == $row->status_kawin ? 'selected' : '' }}>{{ $row->status_kawin }}</option>
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
                                    <option value="{{ $row->warga }}" {{ Auth::user()->kewarganegaraan == $row->warga ? 'selected' : '' }}>{{ $row->warga }}</option>
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
                                    <option value="{{ $row->pekerjaan }}" {{ Auth::user()->pekerjaan == $row->pekerjaan ? 'selected' : '' }}>{{ $row->pekerjaan }}</option>
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
                            <textarea name='alamat' rows="3" class="form-control">{{ Auth::user()->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="field-set">
                                    <label>RT:</label>
                                    <input type='number' name='rt' step="1" class="form-control" value="{{ Auth::user()->rt }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="field-set">
                                    <label>RW:</label>
                                    <input type='number' name='rw' step="1" class="form-control" value="{{ Auth::user()->rw }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field-set">
                                    <label>Dusun:</label>
                                    <input type='text' name='dusun' class="form-control" value="{{ Auth::user()->dusun }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type='button' id='update' class="btn-main color-2 float-end">Update Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#update').click(function(){
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
                $("#update").attr("disabled","true");
                $("#update").html("<b>Memproses...</b>");
                $('#form_update').submit();
            }
        });
    });
</script>
@endsection