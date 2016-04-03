@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Futsal</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Futsal merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa Teknik Informatika FTI UII yang memiliki minat dan bakat serta potensi dalam bermain Futsal. Setiap tim yang berlaga dalam pertandingan ini mewakili dari tiap-tiap angkatan masing-masing.
<h3>Syarat Peserta</h3>
<ol>
    <li>Peserta Futsal adalah satu tim yang terdiri dari min 6 orang dan max 10 orang
    <ul>
    <li>3 Tim untuk 2015</li>
    <li>3 Tim untuk 2014</li>
    <li>3 Tim untuk 2013</li>
    <li>2 Tim untuk 2012</li>
    <li>2 Tim untuk 2011</li>
    <li>1 Tim untuk Dosen dan Karyawan</li>
    <li>2 Tim untuk Alumni</li>
    </ul></li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar <b>Rp 100.000,00M</b>.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
<h3>Ketentuan Peserta</h3>
<ol>
    <li>Peserta Wajib menghadiri Technical Meeting pada waktu yang ditentukan</li>
    <li>Maksimal Keterlambatan 15 menit</li>
    <li>Jika tidak hadir, pengundian dilakukan secara acak</li>
    <li>Jika belum melengkapi syarat administrasi belum dibolehkan mengikuti TM</li>
    <li>Peserta datang tepat waktu sesuai waktu yang ditentukan</li>
    <li>Keterlambatan Maksimal 10 menit</li>
    <li>Jika melebihi waktu maksimal, peserta akan didiskualifikasi</li>
    <li>Peserta Dari Seluruh Mahasiswa aktif  T.Informatika, Alumni & Dosen</li>
    <li>Satu Tim minimal 6 orang maksimal 10 pemain dan 1 official yang sudah terdaftar</li>
    <li>Pendafataran harus disertakan nama pemain</li>
    <li>Jika didapati lebih dari kuota yang ditentukan maka Tim akan didiskualifikasi</li>
    <li>Nama peserta yang mau diganti terakhir sebelum penutupan pendaftaran</li>
    <li>Waktu Penyisihan 16 besar dan 8 besar berupa waktu kotor selama 2×10 menit</li>
    <li>Waktu Semifinal berupa waktu semi-kotor selama 2×10 menit</li>
    <li>Waktu Final berupa waktu bersih selama 2×10 menit</li>
    <li>Satu Pertandingan  2x timeout</li>
    <li>1 timeout digunakan dalam 1 babak saja</li>
    <li>Hukuman :
    <ul>
    <li>Kartu Kuning denda Rp 5000</li>
    <li>Kartu Merah denda Rp 10000</li>
    </ul></li>
    <li>Timeout selama 30 detik dan tidak berlaku pada 2 menit terakhir</li>
    <li>Pelanggaran Maksimal 6 Kali dalam 1 Pertandingan</li>
    <li>Jika melebihi Batas Maksimal Akan dilakukan Penalti secara otomatis</li>
    <li>Jika terdapat kesamaan jumlah point di klasemen maka digunakan selisih skor</li>
    <li>Keputusan Wasit tidak bisa diganggu gugat</li>
    <li>Semua Peraturan wajib ditaati dan dijalankan sesuai ketentuan</li>
    <li>Pergantian pemain dalam timnya harus melapor kepada pengawas meja dan  selanjutnya disampaikan kepada wasit</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang telah ditentukan oleh panitia.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 100.000,00</b> ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
    <li>Setelah selesai melakukan upload bukti pembayaran dan syarat, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah mengirim bukti pembayaran dan scan syarat pendafaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dan mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>                </div>
            </div>
        </div>
    </div>

@endsection
