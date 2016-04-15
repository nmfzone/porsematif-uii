@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Tenis Meja</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Tenis meja merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa Teknik Informatika FTI UII yang memiliki minat dan bakat serta potensi dalam bermain Tenis meja. Setiap tim yang berlaga dalam pertandingan ini mewakili dari tiap-tiap angkatan masing-masing.
<h3>Syarat & Ketentuan</h3>
<ol>
    <li>Mengisi Formulir Pendaftaran</li>
    <li>Bentuk perlombaan perorangan</li>
    <li>Tempat : GOR UII</li>
    <li>Peserta Terdiri Dari :
    <ul>
        <li>Tunggal Putra (max 16 orang)
        <ul>
            <li>3 Orang untuk 2015</li>
            <li>3 Orang untuk 2014</li>
            <li>3 Orang untuk 2013</li>
            <li>2 Orang untuk 2012</li>
            <li>2 Orang untuk 2011</li>
            <li>1 Orang untuk Dosen dan Karyawan</li>
            <li>2 Orang untuk Alumni</li>
        </ul></li>
    </ul></li>
    <li>Match Point : 15 Point</li>
    <li>Max Deuce : 20 Point</li>
    <li>Waktu max untuk permainan adalah 30 menit.</li>
    <li>Sistem permainan sistem gugur</li>
    <li>Sistem Penentuan Atau Urutan Main dilakukan Pengundian Waktu TM (Technical Meeting)</li>
    <li>Pengumuman Peraturan tenis meja dilakukan Saat  TM</li>
    <li>Waktu TM Dikabari Lebih Lanjut Oleh Panitia Setelah Mengisi Formulir dan Menyerahkan Uang Pendaftaran dan Fotocopy KTM</li>
    <li>Wajib Datang Pada Saat TM</li>
    <li>Sistem Permainan dan Kuota Dapat diubah Panitia Sesuai Kebijakan Panitia dan diumumkan Saat TM</li>
</ol>
<h3>Regulasi/peraturan</h3>
<ol>
    <li>Peserta Wajib menghadiri Technical Meeting pada waktu yang ditentukan</li>
    <li>Jika belum melengkapi syarat administrasi belum dibolehkan mengikuti TM</li>
    <li>Peserta datang tepat waktu sesuai waktu yang ditentukan</li>
    <li>Keterlambatan Maksimal 10 menit</li>
    <li>Jika melebihi waktu maksimal peserta didiskualifikasi</li>
    <li>Peserta Dari Seluruh Mahasiswa aktif  T.Informatika, Alumni dan Dosen</li>
    <li>Peserta Terdiri dari Tunggal Putra saja</li>
    <li>Match Point : 15 Point</li>
    <li>Jika Deuce : 20 point maksimal</li>
    <li>Waktu maksimal : 30 menit</li>
    <li>Keputusan Wasit tidak bisa diganggu gugat</li>
    <li>Semua Peraturan wajib ditaati dan dijalankan sesuai ketentuan</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang telah ditentukan oleh panitia.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 20.000,00</b> ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta mengirimkan scan bukti pembayaran dan kartu pelajar ketua dan anggota ke email info@porsematifuii.com dengan Subyek porsematifuii_tenismeja_(Nama)_(Angkatan).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran dan syarat, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah mengirim bukti pembayaran dan scan syarat pendafaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dan mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
