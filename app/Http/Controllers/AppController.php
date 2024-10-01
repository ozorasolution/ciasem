<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppController extends Controller
{
    public function index(){
        $aparatur = [
            [
                'nama' => 'Indah Aprianti, S.H',
                'jabatan' => 'Kepala Desa',
                'foto' => '/assets/images/aparatur/indah.jpg'
            ],
            [
                'nama' => 'Sepia Putri',
                'jabatan' => 'KAUR. Keuangan',
                'foto' => '/assets/images/aparatur/sepia.jpeg'
            ],
            [
                'nama' => 'Nursyamsiah, S.E',
                'jabatan' => 'KAUR. Perencanaan',
                'foto' => '/assets/images/aparatur/nur.jpeg'
            ],
            [
                'nama' => 'Tri Mukti',
                'jabatan' => 'KAUR. Tata Usaha dan Umum',
                'foto' => '/assets/images/aparatur/tri.jpeg'
            ],
            [
                'nama' => 'Aenun Jazilah, S.Pd',
                'jabatan' => 'Sekretaris Desa',
                'foto' => '/assets/images/aparatur/ainun.jpeg'
            ],
            [
                'nama' => 'Hendra Saputra',
                'jabatan' => 'KASIE. Pemerintahan',
                'foto' => '/assets/images/aparatur/hendra.jpeg'
            ],
            [
                'nama' => 'Aan Samsudin',
                'jabatan' => 'KASIE. Pelayanan',
                'foto' => '/assets/images/aparatur/aan.jpeg'
            ],
            [
                'nama' => 'Iwan Ernawan',
                'jabatan' => 'KASIE. Kesejahteraan',
                'foto' => '/assets/images/aparatur/iwan.jpeg'
            ],
        ];

        $now = Carbon::now();
        $tanggal = $now->translatedFormat('l, d F Y');
        return view('home',[
            'tanggal' => $tanggal,
            'aparatur' => $aparatur,
            // 'berita' => DB::select("SELECT *, CASE WHEN CHAR_LENGTH(deskrip) > 100 THEN CONCAT(LEFT(deskrip, 100), '...') END deskripsi 
            //                         FROM list_berita WHERE jenis = 'Berita' AND id IN (4,5) limit 2"),
            // 'event' => DB::select("SELECT *, DATE_FORMAT(tglUpload, '%e %M %Y') tgl FROM list_berita WHERE jenis = 'Event'")
        ]);
    }

    public function event(){
        return view('event');
    }

    public function berita(){
        return view('berita');
    }

    public function beritaDetail($id){
        $berita;
        if($id == 4){
            $berita = [
                'judul' => 'BUMDES',
                'pathGambar' => '/assets/images/berita/Berita_2.jpg',
                'deskrip' => 'Jumat, 16 Agustus 2024, Desa Ciasembaru mendapat kunjungan dari Kementerian Desa, PDTT untuk melakukan monitoring dan evaluasi terhadap kegiatan Badan Usaha Milik Desa (BUMDes). Kedatangan tim kementerian disambut oleh Kepala Desa Ciasembaru, Neng Indah Aprianti, S.H., beserta perangkat desa. "Kami merasa terhormat atas kunjungan dari Kementerian Desa PDTT. Kehadiran mereka tentu akan memberikan masukan yang berharga bagi keberlanjutan dan pengembangan BUMDes di desa kami," ujar Neng Kades Indah dalam sambutannya. Tim Kementerian meninjau pengelolaan BUMDes, berdiskusi dengan pengurus, dan memberikan rekomendasi untuk meningkatkan kinerja serta inovasi usaha. Evaluasi ini diharapkan mampu mendorong BUMDes Ciasembaru untuk terus berkembang dan memberi dampak positif bagi masyarakat.'
            ];
        }elseif($id == 5){
            $berita = [
                'judul' => 'PMT (Pemberian Makanan Tambahan)',
                'pathGambar' => '/assets/images/berita/Berita_3.jpg',
                'deskrip' => 'Dalam upaya meningkatkan kesehatan ibu hamil dan balita serta mencegah stunting, Kepala Desa Ciasembaru, Neng Indah Aprianti, S.H., bersama perangkat desa dan kader posyandu, melaksanakan program Pemberian Makanan Tambahan (PMT). Program ini menyasar ibu hamil dan balita yang mengalami kekurangan gizi dan berat badan yang tidak kunjung naik. Kegiatan ini bertujuan untuk memastikan tumbuh kembang anak sesuai dengan usianya, sekaligus sebagai langkah preventif dalam mengatasi masalah stunting yang menjadi perhatian nasional. Neng Kades Indah Aprianti menekankan pentingnya program ini bagi kesehatan generasi penerus desa. “Melalui PMT, kami ingin memastikan bahwa setiap balita di Desa Ciasembaru mendapatkan asupan gizi yang cukup. Pertumbuhan mereka sangat penting, bukan hanya untuk kesehatan saat ini, tetapi juga untuk masa depan mereka. Kami tidak ingin ada anak-anak yang tertinggal dalam tumbuh kembangnya,” ujar Neng Kades dengan penuh semangat. Program PMT ini melibatkan pemberian makanan bergizi seperti bubur kacang hijau, telur, dan buah-buahan yang dipastikan mengandung nutrisi penting. Kader posyandu juga aktif memantau perkembangan balita, serta memberikan edukasi kepada para ibu mengenai pentingnya pola makan sehat dan seimbang. Program PMT di Desa Ciasembaru ini mendapat apresiasi dari berbagai pihak, dan diharapkan dapat menjadi contoh bagi desa lain dalam mencegah stunting dan masalah gizi buruk di kalangan ibu hamil dan balita.'
            ];
        }else{
            $berita = [
                'judul' => 'Pelepasan KKN',
                'pathGambar' => '/assets/images/berita/Berita_3.jpg',
                'deskrip' => 'Para mahasiswa Universitas Subang (UNSUB) yang telah melaksanakan program Kuliah Kerja Nyata (KKN) di Desa Ciasembaru, resmi menyelesaikan tugas mereka. Acara pelepasan berlangsung dengan penuh kehangatan, dipimpin langsung oleh Kepala Desa Ciasembaru, Neng Indah Aprianti, S.H., serta dihadiri oleh perangkat desa lainnya.
                                Dalam sambutannya, Neng Kades Indah menyampaikan apresiasi yang tulus kepada para mahasiswa atas kontribusi mereka dalam berbagai kegiatan desa.
                                “Kami sangat berterima kasih atas kedatangan kalian di Desa Ciasembaru. Kehadiran kalian sangat membantu dalam beberapa program dan kegiatan yang berjalan di desa ini. Semoga ilmu yang kalian peroleh di sini dapat bermanfaat, baik bagi kalian maupun masyarakat luas,” ujar Neng Kades dengan penuh harap.
                                Selama menjalankan KKN, para mahasiswa UNSUB terlibat dalam sejumlah program pemberdayaan masyarakat, mulai dari pendidikan, kesehatan, hingga pengembangan ekonomi desa. Kehadiran mereka di desa ini tidak hanya memberikan pengalaman langsung bagi mahasiswa, tetapi juga menjadi kontribusi berharga bagi masyarakat Ciasembaru.
                                Pelepasan ini menandai berakhirnya kolaborasi produktif antara Desa Ciasembaru dan mahasiswa UNSUB, yang diharapkan dapat terus berlanjut di masa mendatang. Masyarakat desa pun turut menyampaikan rasa terima kasih dan harapan agar sinergi serupa dapat kembali terwujud.'
            ];
        }

        return view('berita-detail',[
            // 'berita' => DB::select("SELECT * FROM list_berita WHERE jenis = 'Berita' AND id = ".$id)
            'berita' => $berita
        ]);
    }

    public function eventDetail($id){
        $event;
        if($id == 1){
            $event = [
                'judul' => 'Karnaval Budaya',
                'pathGambar' => '/assets/images/event/event1.jpg',
                'deskrip' => 'PESTA RAKYAT” KARNAVAL BUDAYA” Yang di Selenggarakan Oleh Pemerintah Desa Ciasembaru Minggu, 11 Agustus 2024 Bertempat di Kantor Desa Ciasembaru, dibuka Dengan Budaya Tari Lokal Yaitu Sanggar Seni,
                                Beberpa Turnament Yang di Perlombakan yaitu Tenis Meja, Futsal Putra U-12, Lomba PMT, Lomba Karnaval Budaya, dan masih banyak turnament lainya.
                                Masyarakat Ciasem Sangat Antusias Dan Ramai Berbondong2 untuk menyaksikan Acara Tersebut.'
            ];
        }elseif($id == 2){
            $event = [
                'judul' => 'MOU DENGAN LUVTRIP',
                'pathGambar' => '/assets/images/event/event2.jpg',
                'deskrip' => 'Desa Ciasem Baru mengambil langkah strategis, menuju pengembangan pariwisata berkelanjutan melalui penandatanganan MoU dengan Luvtrip (11/8). MoU ditandatangani oleh Direktur Utama Luvtrip dan Kepala Desa Ciasem Baru, dan disaksikan langsung oleh Camat Ciasem. Acara penandatanganan ini tidak hanya menandai komitmen bersama untuk mengembangkan desa wisata, tetapi disertai dengan peresmian jembatan yang akan menjadi akses menuju spot wisata baru.
                                Program yang disepakati dalam MoU ini mencakup berbagai kegiatan pemberdayaan komunitas, seperti pelatihan keterampilan Sumber Daya Manusia (SDM), maupun pengembangan kelembagaan dan pengelolaan wisata di Ciasem Baru. Adapun topik pelatihan meliputi pembuatan paket wisata, dasar - dasar teknik fotografi untuk konten pariwisata, pengembangan event pariwisata, dan pemanfaatan media sosial serta konten digital untuk promosi. Ini semua dirancang untuk memperkuat kemampuan masyarakat dalam mengelola dan mempromosikan potensi wisata Desa Ciasem Baru.'
            ];
        }else{
            $event = [
                'judul' => 'PAWAI ALEGORIS',
                'pathGambar' => '/assets/images/event/event3.jpg',
                'deskrip' => 'Dalam rangka memeriahkan peringatan HUT ke-79 Republik Indonesia, Kepala Desa Ciasembaru, Neng Indah Aprianti, S.H., turut ambil bagian dalam karnaval pawai alegoris kemerdekaan tingkat Kecamatan Ciasem. Bersama para perangkat desa dan ibu-ibu PKK, mereka tampil penuh semangat dengan mengenakan kostum dan atribut yang mencerminkan kekayaan budaya lokal.
                                Karnaval yang berlangsung meriah ini diikuti oleh berbagai elemen masyarakat, mulai dari pelajar, kelompok pemuda, hingga komunitas-komunitas lokal. Dengan antusiasme yang tinggi, rombongan dari Desa Ciasembaru menjadi salah satu yang paling mencuri perhatian dengan kreativitas dan kekompakan mereka.
                                Neng Kades Indah Aprianti menyampaikan bahwa pawai ini bukan hanya tentang perayaan kemerdekaan, tetapi juga merupakan ajang untuk mempererat tali persaudaraan di antara masyarakat.
                                “Melalui pawai alegoris ini, kita bisa semakin memperkuat kebersamaan dan kekompakan, baik di tingkat desa maupun kecamatan. Kebersamaan inilah yang menjadi dasar penting dalam membangun desa yang lebih maju,” ungkap Neng Kades dengan penuh semangat.
                                Ibu-ibu PKK Desa Ciasembaru juga ikut ambil bagian dengan tampilan unik dan penuh warna, membawa pesan semangat persatuan dan gotong royong. Mereka berjalan bersama-sama dalam suasana riang gembira, diiringi alunan musik tradisional dan modern yang menambah kemeriahan acara.
                                Karnaval ini tidak hanya menjadi ajang hiburan, tetapi juga wujud nyata kecintaan masyarakat terhadap tanah air. Dengan partisipasi aktif dari berbagai kelompok, termasuk dari Desa Ciasembaru, acara ini berhasil menciptakan atmosfer yang penuh semangat nasionalisme dan persatuan.'
            ];
        }

        return view('event-detail',[
            // 'event' => DB::select("SELECT * FROM list_berita WHERE jenis = 'Event' AND id = ".$id)
            'event' => $event
        ]);
    }

    public function profiledesa(){
        $now = Carbon::now();
        $tanggal = $now->translatedFormat('l, d F Y');
        return view('faq/profiledesa',[
            'tanggal' => $tanggal
        ]);
    }

    public function strukturorg(){
        $now = Carbon::now();
        $tanggal = $now->translatedFormat('l, d F Y');
        return view('faq/strukturorg',[
            'tanggal' => $tanggal
        ]);
    }

    public function privacypol(){
        $now = Carbon::now();
        $tanggal = $now->translatedFormat('l, d F Y');
        return view('faq/privacypol',[
            'tanggal' => $tanggal
        ]);
    }
    
}
