@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Counter Strike</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
COUNTER STRIKE merupakan rangkaian acara PORSEMATIF 2016, kompetisi ini ditunjukkan kepada mahasiswa Teknik Informatika FTI UII bagi yang merasa jago untuk permainan COUNTER STRIKE
<h3>Syarat Peserta</h3>
<ol>
    <li>Peserta COUNTER STRIKE adalah satu tim yang terdiri dari maksimal 5 orang
    <ol>
    <li>4 Tim untuk 2015</li>
    <li>4 Tim untuk 2014</li>
    <li>4 Tim untuk 2013</li>
    <li>4 Tim untuk 2012</li>
    <li>2 Tim untuk 2011</li>
    <li>2 Tim untuk Alumni</li>
    </ol></li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar Rp 50.000,00.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>

<h3>Ketentuan Peserta</h3>
<ol>
    <li>Peserta wajib menghadiri TechnicalMeeting pada waktu yang ditentukan panitia.</li>
    <li>Peserta wajib menghadiri acara pembukaan untuk mendaftar ulang.</li>
    <li>Peserta wajib berpakaian sopan.</li>
    <li>Setiap tim wajib berisi 5 orang (5v5).</li>
    <li>CounterStrike yang dipergunakan adalah CounterStrike 1.6</li>
    <li>Map yang akan digunakan: de_dust2, de_inferno, de_nuke, de_train.</li>
    <li>Penentuan map akan dilakukan dengan undian.</li>
    <li>Pertandingan akan terbagi menjadi 2 babak (1st half dan 2nd half), yang masing-masing terdiri dari 5 ronde. Setelah selesai 5 ronde, masing-masing tim akan saling bertukar dari counter teroris menjadi teroris dan sebaliknya.</li>
    <li>Pertandingan akan dimainkan sebanyak 10 round. 5 sebagai CT dan 5 sebagai T.</li>
    <li>Jika kedudukan imbang maka diadakan babak perpanjangan waktu.</li>
    <li>Kondisi uang adalah $800</li>
    <li>Peserta harus sudah hadir di tempat 30 menit sebelum jadwal pertandingan.</li>
    <li>Peserta yang bertanding harus sesuai dengan yang didaftarkan.</li>
    <li>Peserta dilarang mencolokkan flashdisk dengan alasan apapun kecuali diijinkan panitia. Mouseware sudah disediakan.</li>
    <li>Waktu persiapan tim baik waktu memasang alat dan pemanasan adalah 10 menit.</li>
    <li>Untuk sistem gugur map ditentukan melalui undian dengan cara: tim a mengambil 1 kertas undian, tim b mengambil 1 kertas undian, panitia mengambil 1 kertas undian. Kertas yang tidak diambil akan jadi map yang dimainkan.</li>
    <li>Toss koin dilakukan 2x yaitu untuk pilih tempat duduk dan side.</li>
    <li>Toleransi keterlambatan adalah 10 menit, lewat dari 10 menit langsung di woatau bermain dengan 4 member.</li>
</ol>
<b>Ketika Pertandingan</b>
<ul>
    <li>Ketika sudah mati peserta dilarang keras berbicara ataupun menulis dengan temannya yang sama-sama sudah dalam kondisi mati. Posisi tangan harus away from keyboard.</li>
    <li>Protes hanya boleh dilakukan sebelum dan sesudah pertandingan.</li>
    <li>Jika ada player yang hang sebelum 3 round maka pertandingan diulang.</li>
    <li>Jika ada player yang hang setelah 3 round maka pertandingan akan dipause sampai playeryanghang tersebut masuk kembali.</li>
    <li>Jika servercrash sebelum 3 round maka pertandingan diulang.</li>
    <li>Jika servercrash setelah 3 round maka pertandingan diulang dengan kondisi angka yang didapat kedua tim sebelum hang.</li>
    <li>Tidak ada kompensasi uang apabila terjadi player atau server yang crash.</li>
</ul>
<b>Hal-hal yang harus dihindari</b>
<ul>
    <li>Menggunakan segala jenis script adalah illegal.</li>
    <li>Menggunakan segala jenis cheat ataupun bugs adalah illegal.</li>
    <li>Memasang c4 tidak bunyi adalah illegal.</li>
    <li>Memasang c4 harus di tempat yang bisa dilihat dan didefuse oleh CT.</li>
    <li>Mendefuse c4 melalui tembok ataupun tempat yang tidak terlihat adalah illegal.</li>
    <li>Melempar granat melalui atas tembok atau atap diperbolehkan.</li>
    <li>Tidak ada batasan untuk membeli HE, SG ataupun FB.</li>
</ul>
<h3>Peringatan dan Sanksi</h3>
<ul>
    <li>Menolak mengikuti instruksi panitia.</li>
    <li>Terlambat hadir di arena pertandingan dari jadwal yang telah ditetapkan.</li>
    <li>Menggunakan bahasa yang mengandung unsur pornoografi dan SARA.</li>
    <li>Menggunakan nickname yang mengandung unsur pornoografi dan SARA.</li>
    <li>Player akan dikeluarkan oleh panitia apabila:
    <ol>
    <li>Telah diberikan peringatan lebih dari 2x.</li>
    <li>Terbukti menggunakan cheat, script ataupun program illegal.</li>
    <li>Mengingat ketatnya jadwal pertandingan maka peserta wajib berada di lokasi pertandingan untuk melakukan registrasi ulang 30 menit sebelum jadwal pertandingannya, apabila peserta melanggar maka akan didiskualifikasi.</li>
    </ol></li>
</ul>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib menghadiri TM (Technical Meeting) pada waktu yang sudah ditentukan oleh panitia</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Peserta mengisi formulir registrasi yang tersedia dengan data yang sebenarnya-benarnya.</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 50.000,00</b> rekening <b>Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
