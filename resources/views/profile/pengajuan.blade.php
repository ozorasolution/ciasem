@extends('profile.profile')
@section('head')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
@endsection
@section('title','| Pengajuan')
@section('profile-title', 'Pengajuan')

@section('profile-content')
<div class="col-lg-9">
    <div class="card padding10 rounded-5 mb25">
        <div class="card-header"><h3>Daftar Pengajuan</h3></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <h4 class="float-end">Filter Status</h4>
                    <select class="form-control" id="status">
                        <option value="all">Semua status</option>
                        <option value="proses">Proses</option>
                        <option value="diterima">Diterima</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3 grid-pengajuan">
                <div class="col-md-6 ditolak">
                    <div class="pengajuan-box">
                        <div class="detail-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/mail.png') }}" alt=""></div>
                            <div class="p-1 info">
                                <h5>Surat keterangan garapan sawah</h5>
                                <h6 class="mb-0 align-self-end">31 Agustus 2024</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 proses">
                    <div class="pengajuan-box">
                        <div class="detail-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/mail.png') }}" alt=""></div>
                            <div class="p-1 info">
                                <h5>Surat miskin</h5>
                                <h6 class="mb-0 align-self-end">31 Agustus 2024</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 diterima">
                    <div class="pengajuan-box">
                        <div class="detail-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/mail.png') }}" alt=""></div>
                            <div class="p-1 info">
                                <h5>Surat keterangan garapan sawah</h5>
                                <h6 class="mb-0 align-self-end">31 Agustus 2024</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 diterima">
                    <div class="pengajuan-box">
                        <div class="detail-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/mail.png') }}" alt=""></div>
                            <div class="p-1 info">
                                <h5>Surat keterangan garapan sawah</h5>
                                <h6 class="mb-0 align-self-end">31 Agustus 2024</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        // Set height sebelum di fitRows isotope
        var maxHeight = 0;
        $('.pengajuan-box').each(function() {
            var currentHeight = $(this).height();
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });
        $('.pengajuan-box').height(maxHeight);

        var $grid = $('.grid-pengajuan').isotope({
            layoutMode: 'fitRows',
        });

        $('#status').on('change', function() {
            if($(this).val() != 'all'){
                let className = "." + $(this).val();
                $grid.isotope({ filter: className });
            }else
                $grid.isotope({ filter: '*' });
        });
    });
</script>
@endsection
