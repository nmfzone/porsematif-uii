@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <div class="contest-logo">
            <img src="{{ asset('assets/images/programming.png') }}">
        </div>
        <h3 class="title">Programming</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
                <li><a href="#tab2">Syarat dan Ketentuan</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
                    Programming Competition merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa setingkat D3/D4/S1 se-Regional Yogyakarta yang berupa penyelasaian masalah untuk di buat kode program dalam bahasa C++, C, Java yang dibagi dalam dua kategori junior dan senior.
                    <h3>Timeline Kompetisi</h3>
                    <ol>
                        <li>Pendaftaran Online : 22 Maret - 14 April 2016</li>
                        <li>Babak Penyisihan : 1 Mei 2016</li>
                        <li>Babak Final : 4 Mei 2016</li>
                    </ol>
                    <h3>Alur Kompetisi</h3>
                    <ol>
                        <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII.</li>
                        <li>Peserta melunasi biaya pendaftaran sebesar <b>Rp. 50.000,00</b> ke rekening Mandiri <b>1370012005217 a/n DHIYA MAHDI ASRINY</b>.</li>
                        <li>Peserta melakukan upload bukti pembayaran dan kartu pelajar ke dalam dashboard sistem.</li>
                        <li>Peserta yang telah melengkapi administrasi akan diberikan password untuk login ke sistem.</li>
                        <li>Panitia akan melakukan pengumuman tim yang lolos ke babak final.</li>
                        <li>Babak final (live coding) akan dilangsungkan di Teknik Informatika, Universitas Islam Indonesia.</li>
                    </ol>
                </div>
                <div id="tab2" class="tabContent">
<h3>Divisi Junior</h3>
<ol>
    <li>Peserta programmng Competition adalah satu tim yang terdiri dari maksimal 3 orang.</li>
    <li>Peserta merupakan mahasiswa mahasiswa baru (Maksimal semester 2) se-Regional Yogyakarta</li>
    <li>Setiap kampus diperbolehkan untuk mendaftarkan lebih dari satu tim.</li>
    <li>Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda.</li>
    <li>Satu tim harus berasal dari kampus yang sama.</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar <b>Rp 50.000,00</b>.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
<h3>Divisi Senior</h3>
<ol>
    <li>Peserta programmng Competition adalah satu tim yang terdiri dari maksimal 3 orang.</li>
    <li>Peserta merupakan mahasiswa setingkat D3/D4/S1 se-Regional Yogyakarta yang berstatus aktif</li>
    <li>Setiap kampus diperbolehkan untuk mendaftarkan lebih dari satu tim.</li>
    <li>Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda.</li>
    <li>Satu tim harus berasal dari kampus yang sama.</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar <b>Rp 50.000,00</b>.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
