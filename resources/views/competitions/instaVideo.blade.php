@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Insta Video</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Dalam Porsematif tahun 2016 ini terdapat tempat untuk menguji mahasiswa Teknik Informatika FTI UII berkreasi dalam video editing dan mendorong mahasiswa untuk membuka mata masyarakat akan Teknologi Informasi yang dijadikan dalam perlombaan ini sebagai tema perlombaan. Dengan cara mengupload hasil kreatifitas ke akun sosial media (Instagram), peserta bukan hanya bisa mengasah kemampuan peserta dalam video editing, tetapi juga bisa membukakan pemikiran masyarakat tentang Teknologi Informasi.
<h3>Syarat & ketentuan</h3>
<ol>
    <li>Peserta adalah mahasiswa aktif T.Informatika UII 2011-2015</li>
    <li>Tempat dan isi video bebas</li>
    <li>Durasi maksimal 15 detik</li>
    <li>Tema mengandung unsur teknologi informasi</li>
    <li>Peserta diperbolehkan menggunakan video editing apapun.</li>
    <li>Peserta wajib mengupload hasil shootingnya ke akun instagram milik peserta dengan menambahkan hashtag #InstaVideoPorsematif #Porsematif2016 #InstaVideoPorsematif2016 dan menandai akun resmi Porsematif 2016.</li>
    <li>Peserta wajib menyerahkan video terbaik dalam bentuk soft file ke panitia (dengan format MP4)</li>
    <li>Batas penyerahan dan upload video ke instagram sebelum H-3 acara penutupan pukul 22.00 ke panitia.</li>
    <li>Pengumuman pemenang akan diumumkan pada acara penutupan Porsematif 2016.</li>
    <li>Keputusan juri tidak dapat diganggu gugat.</li>
    <li>Menyerahkan video terbaik dalam bentuk softcopy ke panitia paling lambat 6 Mei 2016</li>
</ol>
<h3>Kriteria Penilaian</h3>
<ol>
    <li>Keterkaitan hasil video dengan tema yang ditentukan</li>
    <li>Kejelasan makna yang disampaikan</li>
    <li>Ketepatan durasi</li>
    <li>Inovasi dan kreatifitas</li>
    <li>Orisinalitas</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pengumpulan hasil karya paling lambat tanggal 6 Mei 2016</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 atas nama DHIYA MAHDI ASRINY</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib mengikuti technical meeting yang diadakan pada tanggal 15 APRIL 2016.</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 25.000,00</b> ke rekening <b>Mandiri 1370012005217 atas nama DHIYA MAHDI ASRINY</b></li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
