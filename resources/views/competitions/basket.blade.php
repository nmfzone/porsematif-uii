@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Basket</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Basket merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa Teknik Informatika FTI UII yang memiliki minat dan bakat serta potensi dalam bermain Basket. Setiap tim yang berlaga dalam pertandingan ini mewakili dari tiap-tiap angkatan masing-masing.
<h3>Syarat & Ketentuan</h3>
<ol>
    <li>Peserta dari Seluruh Mahasiswa aktif T.Informatika dan Alumni</li>
    <li>Satu tim Maksimal terdiri dari 20 pemain dan 1 official yang sudah terdaftar</li>
    <li>Terdiri dari 12 Team :
    <ul>
    <li>2 Team untuk 2015</li>
    <li>2 Team untuk 2014</li>
    <li>2 Team untuk 2013</li>
    <li>2 Team untuk 2012</li>
    <li>2 Team untuk 2011</li>
    <li>2 Team untuk Alumni</li>
    </ul></li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang ditentukan</li>
    <li>Keterlambatan TM maksimal 15 menit</li>
    <li>Jika terlambat hasil undian dilakukan secara acak</li>
    <li>Jika belum melengkapi syarat administrasi tidak diperbolehkan mengikuti Technical Meeting</li>
    <li>Peserta datang tepat waktu sesuai waktu yang ditentukan</li>
    <li>Keterlambatan maksimal 10 menit</li>
    <li>Peserta dari Seluruh Mahasiswa aktif T.Informatika dan Alumni</li>
    <li>Satu tim Maksimal terdiri dari 20 pemain dan 1 official yang sudah terdaftar</li>
    <li>Durasi pertandingan 4×10 menit</li>
    <li>Keputusan wasit tidak dapat diganggu gugat</li>
    <li>Semua Peraturan wajib ditaati dan dijalankan sesuai ketentuan</li>
    <li>Berlaku peraturan 3 detik atau three second rule</li>
    <li>Berlaku peraturan 8 detik</li>
    <li>Berlaku peraturan 24 detik atau shot clock violation</li>
    <li>Jika terdapat kesamaan jumlah point di klasemen maka digunakan selisih skor</li>
    <li>Pemain yang akan menggantikan pemain lain dalam timnya harus melapor kepada pengawas meja, yang selanjutnya disampaikan kepada wasit tiga</li>
    <li>Setiap tim diperbolehkan meminta waktu time out selama 30 detik satu kali dalam setiap quarter.</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem.</li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang telah ditentukan oleh panitia.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 100.000,00</b> ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dan mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
