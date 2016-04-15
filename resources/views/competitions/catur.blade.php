@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Catur</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Catur merupakan rangkaian acara PORSEMATIF 2016. Kompetisi ini ditujukan untuk mahasiswa Teknik Informatika FTI UII yang memiliki minat dan bakat serta potensi dalam bermain Catur. Setiap tim yang berlaga dalam pertandingan ini mewakili dari tiap-tiap angkatan masing-masing.
<h3>Syarat & Ketentuan</h3>
<ol>
    <li>Tempat : Hall FTI UII</li>
    <li>Peserta Terdiri Dari (Max 16 Orang)
    <ul>
        <li>3 Orang untuk 2015</li>
        <li>3 Orang untuk 2014</li>
        <li>3 Orang untuk 2013</li>
        <li>2 Orang untuk 2012</li>
        <li>2 Orang untuk 2011</li>
        <li>1 Orang untuk Dosen dan Karyawan</li>
        <li>2 Orang untuk Alumni</li>
    </ul></li>
    <li>Bentuk Perlombaan Individu</li>
    <li>Sistem Permainan Kompetisi Gugur</li>
    <li>Sistem Penentuan Atau Urutan Main dilakukan Pengundian Waktu TM (Technical Meeting)</li>
    <li>Pengumuman Peraturan Catur dilakukan Saat TM</li>
    <li>Waktu TM Dikabari Lebih Lanjut Oleh Panitia Setelah Mengisi Formulir dan Menyerahkan Uang Pendaftaran dan Fotocopy KTM</li>
    <li>Wajib datang pada saat TM</li>
</ol>
<h3>Regulasi/peraturan</h3>
<ol>
    <li>Peserta wajib melengkapi syarat administrasi</li>
    <li>Peserta wajib datang sesuai waktu yang ditentukan</li>
    <li>Permainan di Hitung dari kecepatan waktu</li>
    <li>Waktu di hitung dari stopwatch</li>
    <li>Setiap Pemain Maksimal 5 menit dalam 1 gerakan, Jika tidak bergerak sesuai waktu yang ditentukan otomatis berganti giliran</li>
    <li>Peserta diperbolehkan mengembalikan pion ketempat semula jika pion belum diletakkan ke tempat yang berbeda</li>
    <li>Batas waktu 1 jam</li>
    <li>Jika lebih dari 1 jam, permainan akan selesai dan dihitung point dari tiap pion yang dimakan, dengan ketentuan
    <ul>
        <li>Pion : 1 Point</li>
        <li>Kuda : 2 Point</li>
        <li>Benteng : 3 Point</li>
        <li>Menteri : 4 Point</li>
        <li>Queen : 5 Point</li>
    </ul></li>
    <li>Peserta tidak boleh memegang pion pemain lain karena itu dianggap curang</li>
    <li>Pemain harus bersifat sportif dan tidak boleh melakukan kecurangan</li>
    <li>Setiap pemain harus mentaati semua peraturan yang ada</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang telah ditentukan oleh panitia.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 15.000,00</b> ke rekening <b>Mandiri 1370012005217 a/n DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah mengirim bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dan mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
