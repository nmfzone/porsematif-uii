@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Informatics Smart</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Informatics smart merupakan salah satu rangkaian acara  PORSEMATIF 2016  yang berupa cerdas cermat antar mahasiswa Teknik Informatika UII ysng bertujuan untuk menambah wawasan intelektual mahasiswa.
<h3>Syarat & Ketentuan</h3>
<ol>
    <li>Peserta adalah mahasiswa teknik informatika yang terdiri dari :
    <ul>
    <li>2 Tim untuk 2015</li>
    <li>2 Tim untuk 2014</li>
    <li>2 Tim untuk 2013</li>
    <li>1 Tim untuk 2012</li>
    <li>1 Tim untuk 2011</li>
    </ul></li>
    <li>Setiap Tim terdiri dari 3 orang</li>
    <li>Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar Rp 30.000,00.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
    <li>Peserta wajib mengikuti technical meeting yang diadakan pada tanggal 15 APRIL 2016.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a></li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 30.000,00</b> ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Setelah selesai melakukan upload bukti pembayaran dan syarat, peserta mengkonfirmasi di nomor <b>085600095453 (siwi)</b> bahwa kelompok tersebut telah melakukan upload bukti pembayaran dan scan syarat pendafaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
