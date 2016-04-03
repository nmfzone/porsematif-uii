@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">PES 2016</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
PES 2016 merupakan rangkaian acara PORSEMATIF 2016, kompetisi ini ditunjukkan kepada mahasiswa Teknik Informatika FTI UII bagi yang merasa bisa dalam permainan PES 2016
<h3>Syarat Peserta</h3>
<ol>
    <li>Peserta PES 2016 adalah perseorangan</li>
    <li>Peserta merupakan mahasiswa teknik inforamtika FTI UII yang berstatus aktif</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar Rp 15.000,00.</li>
    <li>Wajib mengumpulkan fotocopy KTM kepada panitia.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
<h3>Ketentuan Peserta</h3>
<ol>
    <li>Peserta wajib menghadiri TM (Technical Meeting) pada waktu yang ditentukan panitia.</li>
    <li>Peserta wajib menghadiri acara pembukaan untuk mendaftar ulang.</li>
    <li>Peserta wajib berpakaian sopan.</li>
    <li>Perangkat yang digunakan adalah laptop dan game yang dimainkan adalah PES 2016</li>
    <li>Mode pertandingan exhibition match.</li>
    <li>Tim yang dipertandingkan adalah klub</li>
    <li>Dalam babak penyisihan waktu pertandingan yang digunakan adalah 5 menit</li>
    <li>Dalam babak 8 besar sampai final waktu pertandingan yang digunakan adalah 10 menit</li>
    <li>Game Speed yang digunakan adalah 2</li>
    <li>Menggunakan sistem Knockout</li>
    <li>Tidak ada extra time dalam babak penyisihan, jika seri langsung penalty</li>
    <li>Stadion yang digunakan adalah netral</li>
    <li>Peserta hanya diberi waktu 3 menit untuk melakukan setting formasi sebelum pertandingan dimulai</li>
    <li>Dalam pertandingan, menekan tombol start hanya boleh dilakukan oleh player yang memegang bola.</li>
    <li>Pergantian pemain boleh dilakukan apabila pada saat half-time, dan saat bola keluar lapangan.</li>
    <li>Dalam pertandingan, kamera yang dipakai adalah wide</li>
    <li>Kondisi tiap pemain adalah Normal (Hijau)</li>
    <li>Player Emotion dan Injuries disetting off</li>
    <li>Jika terjadi kartu merah, maka peserta berhak melakukan pengaturan formasi dan pergantian pemain maksimal selama 1 menit</li>
    <li>Jika terjadi kesalahan teknis maka akan direstrat sesuai dengan kondisi terakhir</li>
    <li>Jika terjadi mati lampu maka pertandingan akan diulang</li>
    <li>Peserta diperbolehkan membawa joystick sendiri.</li>
    <li>Jika peserta berkata kasar, menghina pemain lain, melakukan kontak fisik dll. Maka akan diberi peringatan berupa kartu kuning dari panitia jika melanggar lagi maka akan diberikan kartu merah</li>
    <li>Jika pemain mendapat kartu merah dari panitia maka pemain akan langsung di diskualifikasi</li>
    <li>Jika pemain merusak aset dengan sengaja maka pemain akan mengganti aset tersebut.</li>
    <li>Peserta wajib menaati peraturaan yang telah dibuat panitia</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta mengumpulkan syarat-syarat yang diperlukan kepada panitia</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening bank mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib menghadiri TM (Technical Meeting) pada waktu yang sudah ditentukan oleh panitia</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 15.000,00</b> rekening <b>Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa peserta telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
