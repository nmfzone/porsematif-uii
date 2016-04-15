@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Desain Logo</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Perlombaan Desain Logo ditujukan untuk seluruh mahasiswa/I Teknik Informatika FTI UII yang bertujuan untuk mengembangkan bakat peserta dalam dunia desain grafis yang dikhususkan pada pembuatan logo yang bisa digunakan pada kemudian hari untuk keperluan Jurusan Teknik Informatika FTI UII.
<h3>Syarat & ketentuan</h3>
<ol>
    <li>Peserta adalah mahasiswa aktif T.Informatika UII 2011-2015</li>
    <li>Logo dapat dibuat dengan software apapun</li>
    <li>Pembuatan logo disertai makna dan filosofi yang diambil untuk pembuatan logo tersebut</li>
    <li>Format png.</li>
</ol>
<h3>Kriteria Penilaian</h3>
<ol>
    <li>Kesesuaian dengan jurusan</li>
    <li>Kerapian</li>
    <li>Orisinalitas Karya</li>
    <li>Estetika Desain</li>
    <li>InovasidanKreativitas</li>
    <li>Makna logo</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pengumpulan hasil karya paling lambat tanggal 6 Mei 2016</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib mengikuti technical meeting yang diadakan pada tanggal 15 APRIL 2016.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 15.000,00</b> ke rekening <b>Mandiri 1370012005217 atas nama DHIYA MAHDI ASRINY</b></li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
