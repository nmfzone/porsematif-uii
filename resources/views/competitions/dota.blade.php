@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Dota 2</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
DOTA 2 COMPETITION merupakan rangkaian acara PORSEMATIF 2016, kompetisi ini ditunjukkan kepada mahasiswa Teknik Informatika FTI UII bagi yang merasa jago untuk permainan DOTA 2 COMPETITION
<h3>Syarat Peserta</h3>
<ol>
    <li>Peserta DOTA 2 COMPETITION adalah satu tim yang terdiri dari maksimal 5 orang</li>
    <li>Wajib mengumpulkan fotocopy KTM kepada panitia.</li>
    <li>Peserta merupakan mahasiswa teknik inforamtika FTI UII yang berstatus aktif</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar Rp 70.000,00.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
<h3>Ketentuan Peserta</h3>
<ol>
    <li>Peserta wajib menghadiri TechnicalMeeting pada waktu yang ditentukan panitia.</li>
    <li>Peserta wajib menghadiri acara pembukaan untuk mendaftar ulang.</li>
    <li>Peserta wajib berpakaian sopan.</li>
    <li>Setiap tim wajib berisi 5 orang (5v5).</li>
    <li>Sistem permainan adalah sistem gugur.</li>
    <li>Jenis permainan yang digunakan adalah captain mode.</li>
    <li>Waktu maksimal yang diberikan adalah 45 menit.</li>
    <li>Jika dalam waktu yang ditentukan game belum selesai, maka pemenang ditentukan dari Tower dan barrack yang hancur serta jumlah kill.</li>
    <li>Ketentuan apapun yang dibuat oleh panitia tidak boleh diganggu gugat.</li>
    <li>Tim hanya boleh terlambat 10 menit, jika tim belum hadir dianggap WalkOut.</li>
    <li>Jika Gamepause selama 10 menit, maka Game akan tetap berjalan terus dalam kondisi apapun (4v5 atau semacamnya).</li>
    <li>Dilarang keras all chat berbau SARA Call GG secara tidak sengaja (jika di screenshoot dan diberikan kepada admin, tim tersebut otomatis gugur).</li>
</ol>
<h3>Peraturan</h3>
<ol>
    <li>Tidak diperbolehkan untuk bunuh diri secara sengaja dengan maksud memberikan drop item kepada pemain lain.</li>
    <li>Backdoor diperbolehkan.</li>
    <li>Segala bentuk cheat, hack, eksploitas tidak diperkenankan, apabila salah satu tim melanggar game akan dihentikan yang berakibat diskualifikasi.</li>
    <li>Dilarang chat yang tidak penting atau mengundang provokasi.</li>
    <li>Disconnect</li>
    <li>Jika koneksi terputus game akan dipause.</li>
    <li>Game akan diunpause setelah koneksi terhubung.</li>
    <li>Pause game maksimal hanya 2 kali saja (10 menit) dalam satu match (jika lag, pchang). Dan diharuskan memberitahukan dahulu kepada admin yang bersangkutan.</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Peserta mengumpulkan syarat-syarat yang diperlukan kepada panitia</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening bank mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib menghadiri TM (Technical Meeting) pada waktu yang sudah ditentukan oleh panitia</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 70.000,00</b> rekening <b>Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah mengirim bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
