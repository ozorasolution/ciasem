<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $req){
        $credentials = $req->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['nik' => $credentials['nik'], 'password' => $credentials['password']])) {
            $req->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()->with([
            'loginError' => 'Username atau Password salah!',
            'back_to_section' => '#loginform'
        ]);
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // return redirect('/');
        return 'berhasil';
    }

    public function register(){
        return view('register',[
            'agama' => DB::select("SELECT * FROM list_pilihan_agama"),
            'gol_darah' => DB::select("SELECT * FROM list_pilihan_darah"),
            'pendidikan' => DB::select("SELECT * FROM list_pilihan_pendidikan"),
            'status_kawin' => DB::select("SELECT * FROM list_pilihan_kawin"),
            'warga' => DB::select("SELECT * FROM list_pilihan_warga"),
            'pekerjaan' => DB::select("SELECT * FROM list_pilihan_pekerjaan"),
        ]);
    }

    public function registerPost(Request $req){
        $rules = [
            'nik' => 'required|numeric|unique:users_warga,nik',
            'notelp' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'agama' => 'required',
            'blood' => 'required',
            'pendidikan' => 'required',
            'kawin' => 'required',
            'warga' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'dusun' => 'required',
        ];
        $err = [
            'nik.required' => 'NIK tidak boleh kosong!',
            'nik.numeric' => 'NIK harus berupa angka!',
            'nik.unique' => 'NIK sudah terdaftar!',
            'notelp.required' => 'No Telp tidak boleh kosong!',
            'notelp.numeric' => 'No Telp harus berupa angka!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Format tidak sesuai!',
            'password.required' => 'Password tidak boleh kosong!',
            'password.min' => 'Password minimal :min karakter!',
            'password.confirmed' => 'Password tidak cocok!',
            'nama.required' => 'Nama tidak boleh kosong!',
            'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong!',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            'gender.required' => 'Belum memilih jenis kelamin!',
            'agama.required' => 'Belum memilih agama!',
            'blood.required' => 'Belum memilih golongan darah!',
            'pendidikan.required' => 'Belum memilih pendidikan!',
            'kawin.required' => 'Belum memilih status kawin!',
            'warga.required' => 'Belum memilih kewarganegaraan!',
            'pekerjaan.required' => 'Belum memilih pekerjaan!',
            'alamat.required' => 'Alamat tidak boleh kosong!',
            'rt.required' => 'RT tidak boleh kosong!',
            'rw.required' => 'RW tidak boleh kosong!',
            'dusun.required' => 'Dusun tidak boleh kosong!',
        ];
        $validasi = Validator::make($req->all(), $rules, $err);

        // Cek validasi
        if($validasi->fails())
            return back()->withErrors(['regisError' => $validasi->errors()->first()])->withInput();

        // Lolos cek
        DB::beginTransaction();
        try {
            User::create([
                'tglRegister' => Carbon::now(),
                'pathGambar' => '',
                'nik' => $req->nik,
                'password' => bcrypt($req->password),
                'hp' => $req->notelp,
                'email' => $req->email,
                'nama_lengkap' => $req->nama,
                'alamat' => $req->alamat,
                'tanggal_lahir' => $req->tanggal_lahir,
                'tempat_lahir' => $req->tempat_lahir,
                'jenis_kelamin' => $req->gender,
                'agama' => $req->agama,
                'golongan_darah' => $req->blood,
                'pendidikan' => $req->pendidikan,
                'status_perkawinan' => $req->kawin,
                'kewarganegaraan' => $req->warga,
                'pekerjaan' => $req->pekerjaan,
                'rt' => $req->rt,
                'rw' => $req->rw,
                'dusun' => $req->dusun,
                'status_valid' => 1,
                'isAktif' => 1,
                'tglNonAktif' => Carbon::now()
            ]);

            DB::commit();
            return back()->with(['daftarSuccess' => 'yes']);
        } catch(\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['regisError' => 'Terjadi kesalahan!'])->withInput();
        }
    }
}
