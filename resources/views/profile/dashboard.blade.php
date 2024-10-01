@extends('profile.profile')
@section('title','| Profile Dashboard')
@section('profile-title', 'Dashboard')

@section('profile-content')
<div class="col-lg-9">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-6 mb25 order-sm-1">
            <div class="card padding30 rounded-5">
                <div class="symbol mb40">
                    <i class="fa id-color fa-tags fa-3x" style="color: #ffa915"></i>
                </div>
                <span class="h1 mb0">15</span>
                <span class="text-gray">Pengajuan</span>
            </div>
        </div>

        <div class="col-lg-4 col-6 mb25 order-sm-1">
            <div class="card padding30 rounded-5">
                <div class="symbol mb40">
                    <i class="fa-solid fa-circle-check fa-3x" style="color: green"></i>
                </div>
                <span class="h1 mb0">10</span>
                <span class="text-gray">Diterima</span>
            </div>
        </div>

        <div class="col-lg-4 col-6 mb25 order-sm-1">
            <div class="card padding30 rounded-5">
                <div class="symbol mb40">
                    <i class="fa-solid fa-ban fa-3x" style="color: rgb(205, 0, 0)"></i>
                </div>
                <span class="h1 mb0">5</span>
                <span class="text-gray">Ditolak</span>
            </div>
        </div>
    </div>

    <div class="card padding10 rounded-5 mb25">
        <div class="card-header"><h3>Pengajuan Terbaru</h3></div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No. Pengajuan</th>
                        <th>Jenis Pengajuan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Pengajuan Surat Keterangan Garapan Sawah</td>
                        <td>2024-09-23</td>
                        <td><div class="badge rounded-pill bg-danger">Ditolak</div></td>
                        <td><a href="#" class="btn btn-danger"><i class="fa fa-print"></i></a></td>
                    </tr>
                    <tr>
                        <td>P001</td>
                        <td>Pengajuan Surat Kuasa Ahli Waris</td>
                        <td>2024-09-23</td>
                        <td><div class="badge rounded-pill bg-success">Diterima</div></td>
                        <td><a href="#" class="btn btn-danger"><i class="fa fa-print"></i></a></td>
                    </tr>
                    <tr>
                        <td>P001</td>
                        <td>Pengajuan Surat Kuasa Ahli Waris</td>
                        <td>2024-09-23</td>
                        <td><div class="badge rounded-pill bg-warning">Proses</div></td>
                        <td><a href="#" class="btn btn-danger"><i class="fa fa-print"></i></a></td>
                    </tr>
                </tbody>
            </table>
            {{-- <table class="table de-table">
            <thead>
                <tr>
                <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
                <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
                <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
                <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
                <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
                <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
                <th scope="col"><span class="fs-12 text-gray">Status</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01236</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Jeep Renegade</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>New York</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Los Angeles</td>
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                <td><div class="badge rounded-pill bg-success">completed</div></td>
                </tr>
                <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01263</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Mini Cooper</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>San Fransisco</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Chicago</td>
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                <td><div class="badge rounded-pill bg-danger">cancelled</div></td>
                </tr>
                <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01245</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari Enzo</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Philadelphia</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Washington</td>
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 6, 2023</td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                </tr>
                <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01287</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Hyundai Staria</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kansas City</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Houston</td>
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 13, 2023</td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                <td><div class="badge rounded-pill bg-success">completed</div></td>
                </tr>
                <tr>
                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01216</div></td>
                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Toyota Rav 4</span></td>
                <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Baltimore</td>
                <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Sacramento</td>
                <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 7, 2023</td>
                <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                </tr>
            </tbody>
            </table> --}}
        </div>
    </div>
</div>
@endsection
