<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class layananController extends Controller
{
    public function layanan(){
        $listLayanan = [
            'Pengajuan Surat Keterangan Garapan Sawah',
            'Pengajuan Surat Kuasa Ahli Waris',
            'Pengajuan Surat Pernyataan Ahli Waris',
            'Pengajuan Surat Keterangan Belum Menikah',
            'Pengajuan Surat Keterangan Miskin',
            'Pengajuan Surat Keterangan Pisah Kartu Keluarga',
            'Pengajuan SKD Taksiran Harga Tanah',
            'Pengajuan Surat Keterangan Sppt Pbb',
            'Pengajuan Surat Keterangan Tidak Memiliki Rekening Listrik',
            'Pengajuan Surat Keterangan Duda atau Janda',
            'Pengajuan Surat Keterangan Tidak Mampu Sekolah',
            'Pengajuan Surat Keterangan Pernyataan Miskin',
            'Pengajuan Surat Keterangan Usaha',
            'Pengajuan Surat Keterangan Wali',
            'Pengajuan Surat Keterangan Domisili Perusahaan',
            'Pengajuan Surat Pernyataan Harta Bawaan',
        ];

        $datalayanan = array();
        for($i=0; $i < count($listLayanan); $i++){
            $layananObj = new \stdClass();
            $layananObj->layanan = $listLayanan[$i];
            $layananObj->slug = Str::slug($listLayanan[$i]);
            array_push($datalayanan,$layananObj);
        }
        return view('layanan/layanan', ['datalayanan' => $datalayanan]);
    }
    
    public function detail($detail){
        return view('layanan.layanan-detail',[
            'detail' => ucwords(str_replace('-', ' ', $detail))
        ]);
    }

    public function submitLayanan(Request $req){
        $validasi = Validator::make($req->all(), [
            'tujuan' => 'required',
            'note' => 'required',
        ],[
            'tujuan.required' => 'Tujuan tidak boleh kosong',
            'note.required' => 'Keterangan tidak boleh kosong',
        ]);

        if($validasi->fails())
            return response()->json(['status' => 'failed', 'message' => $validasi->errors()->first()], 500);

        if($req->tujuan == 'ok'){
            return response()->json(['status' => 'success', 'message' => 'Data pengajuan berhasil disimpan!'], 201);
        }else{
            return response()->json(['status' => 'failed', 'message' => 'Terjadi kesalahan!'], 500);
        }
    }
}
