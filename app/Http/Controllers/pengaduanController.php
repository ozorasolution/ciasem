<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class pengaduanController extends Controller
{
    public function index(){
        return view('pengaduan');
    }

    public function savePengaduan(Request $req){
        $validasi = Validator::make($req->all(), [ 'pengaduan' => 'required' ], [ 'pengaduan.required' => 'Belum mengisi pengaduan!' ]);

        // Cek validasi
        if($validasi->fails())
            return back()->withErrors(['aduanError' => $validasi->errors()->first()])->withInput();

        if($req->hasFile('dokumen')){
            $validasi = Validator::make($req->all(), [ 'dokumen' => 'required|mimes:pdf,jpg,jpeg,png|max:2048' ], [ 'dokumen.mimes' => 'Format file anda tidak sesuai!' ]);
            if($validasi->fails())
                return back()->withErrors(['aduanError' => $validasi->errors()->first()])->withInput();

            $file = $req->file('dokumen');
            $docname = '[P-01] ('.$file->getClientOriginalName().').'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/pengaduan', $file, $docname);
        }
        return back()->with(['aduanSuccess' => 'yes']);
    }
}
