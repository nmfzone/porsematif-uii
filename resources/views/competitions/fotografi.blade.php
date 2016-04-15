@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Fotografi</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Perlombaan ini bertujuan untuk meampung bakat dan mengembangkan potensi diri mahasiswa/I Teknik Informatika FTI UII yang menjadi peserta dalam perlombaan ini di bidang kesenian gambar digital atau yang disebut fotografi. Setelah kegiatan ini diharapkan peserta memiliki bakat yang semakin meningkat di sekitar pencitraan indra yang semakin tajam dan menciptakan kreasi gambar yang paling indah.
<h3>Syarat & ketentuan</h3>
<ol>
    <li>Peserta adalah mahasiswa aktif T.Informatika UII 2011-2015.</li>
    <li>Peserta wajib menghadiri Technical Meeting pada waktu yang ditentukan panitia.</li>
    <li>Peserta wajib menghadiri acara pembukaan untuk mendaftar ulang.</li>
    <li>Penggunaan kamera bebas untuk mengambil gambar.</li>
    <li>Foto bertemakan “Porsematif 2016”.</li>
    <li>Tempat yang diperbolehkan untuk mengambil gambar yaitu tempat-tempat terselenggaranya acara Porsematif 2016.</li>
    <li>Peserta wajib mengupload 1buah foto yang diambilnya ke akun Instagram milik peserta dan menambahkan caption #PhotgraphyPorsematif2016 #Porsematif2016 dan menandai ke akun resmi instagram Porsematif 2016.</li>
    <li>Peserta tidak diperbolehkan mengedit hasil fotonya dengan aplikasi ataupun software.</li>
    <li>Peserta wajib menyerahkan foto terbaik dalam bentuk soft file ke panitia (dengan format .JPEG dan resolusi 1920 x 1080).</li>
    <li>Batas penyerahan dan upload foto ke instagram 6 Mei 2016 sebelum acara penutupan pukul 22.00 ke panitia.</li>
    <li>Juara favorit diambil dari kategori likers instagram terbanyak.</li>
    <li>Pengumuman pemenang akan diumumkan pada acara penutupan Porsematif 2016.</li>
    <li>Keputusan juri tidak dapat diganggu gugat</li>
</ol>
<h3>Kriteria Penilaian</h3>
<ol>
    <li>Teknis, melingkupi unsur-unsur dasar fotografi yakni, ketajaman, sudut pandang, teknik pemotretan serta komposisi.</li>
    <li>Konsep, melingkupi unsur-unsur gagasan atau ide yang melatari lahirnya sebuah karya foto. Konsep ini terkait dengan orisinalitas karya dan lahirnya gagasan baru.</li>
    <li>Konten, melingkupi unsur-unsur pesan dan informasi yang tersirat maupun tersurat dalam foto. Pesan dalam foto bisa berupa pernyataan, kesan atau ungkapan emosi. Pesan yang bagus adalah pesan yang jelas, tegas dan efektif.</li>
    <li>Tematis, melingkupi unsur-unsur yang terkait dengan tema lomba yang disodorkan.</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 25 April 2016.</li>
    <li>Pengumpulan hasil karya paling lambat tanggal 6 Mei 2016</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening bank mandiri : 1370012005217  atas nama DHIYA MAHDI ASRINY</li>
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
