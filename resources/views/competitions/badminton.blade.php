@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Badminton</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Badminton merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa Teknik Informatika FTI UII yang memiliki minat dan bakat serta potensi dalam bermain Badminton. Setiap tim yang berlaga dalam pertandingan ini mewakili dari tiap-tiap angkatan masing-masing.

<h3>Syarat & Ketentuan</h3>
<ol>
    <li>Peserta Wajib menghadiri Technical Meeting pada waktu yang ditentukan</li>
    <li>Jika belum melengkapi syarat administrasi belum dibolehkan mengikuti TM</li>
    <li>Keterlambatan TM Maksimal 15 Menit</li>
    <li>Peserta datang tepat waktu sesuai waktu yang ditentukan</li>
    <li>Keterlambatan Maksimal 10 menit</li>
    <li>Waktu Maksimal Pertandingan 30 Menit</li>
    <li>Jika Telah mencapai Waktu maksimal secara langsung pertandingan diberhentikan</li>
    <li>Jika melebihi waktu maksimal peserta didiskualifikasi</li>
    <li>Peserta Dari Seluruh Mahasiswa aktif  T.Informatika, Alumni dan Dosen</li>
    <li>Peserta Terdiri dari:
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
        <li>Tunggal Putri (max 8 Orang)
        <ul>
            <li>2 Orang untuk 2015</li>
            <li>1 Orang untuk 2014</li>
            <li>1 Orang untuk 2013</li>
            <li>1 Orang untuk 2012</li>
            <li>1 Orang untuk 2011</li>
            <li>1 Orang untuk Dosen dan Karyawan</li>
            <li>1 Orang untuk Alumni</li>
        </ul></li>
        <li>Ganda Putra (max 8 Tim)
        <ul>
            <li>2 Tim untuk 2015</li>
            <li>1 Tim untuk 2014</li>
            <li>1 Tim untuk 2013</li>
            <li>1 Tim untuk 2012</li>
            <li>1 Tim untuk 2011</li>
            <li>1 Tim untuk Dosen dan Karyawan</li>
            <li>1 Tim untuk Alumni</li>
        </ul></li>
    </ul></li>
    <li>Match Point : 21 Point</li>
    <li>Jika Deuce : 25 Point maksimal</li>
    <li>Keputusan Wasit tidak bisa diganggu gugat</li>
    <li>Semua Peraturan wajib ditaati dan dijalankan sesuai ketentuan</li>
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
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 20.000,00</b> untuk tuanggal putra atau tunggal putri dan <b>Rp. 25.000,00</b> untuk ganda putra ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
    <li>Setelah selesai melakukan upload bukti pembayaran dan syarat, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah mengirim bukti pembayaran dan scan syarat pendafaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dan mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
