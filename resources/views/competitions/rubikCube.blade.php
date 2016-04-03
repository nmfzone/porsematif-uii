@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <h3 class="title">Rubik Cube 3x3</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
Rubik Cube 3×3 merupakan rangkaian acara PORSEMATIF 2016, kompetisi ini ditunjukkan kepada mahasiswa Teknik Informatika FTI UII bagi yang merasa bisa dalam permainan rubik cube 3×3
<h3>Syarat Peserta</h3>
<ol>
    <li>Peserta rubik cube 3×3 adalah perseorangan</li>
    <li>Peserta merupakan mahasiswa teknik inforamtika FTI UII yang berstatus aktif</li>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Peserta harus melunasi biaya pendaftaran sebesar Rp 15.000,00.</li>
    <li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
</ol>
<h3>Ketentuan Peserta</h3>
<ol>
    <li>Peserta wajib datang pada waktu yang telah ditentukan oleh panitia</li>
    <li>Sistem Penentuan Atau Urutan Main dilakukan Pengundian Waktu TM (Technical Meeting) pada waktu yang ditentukan oleh panitia</li>
    <li>Peserta akan didiskualifikasi jika terlambat lebih dari 5 menit pada waktu yang telah ditentukan</li>
    <li>Peserta mendapat 4 kali kesempatan dalam penyelesaian permainan rubik</li>
    <li>Pengacakan rubik dilakukan oleh panitia dengan 3 orang yang berbeda</li>
    <li>Sebelum perlombaan dimulai akan dilakukan pemanasan terlebih dahulu</li>
    <li>Penilaian peserta berdasar waktu tercepat dari percobaan ke 2/3/4 dari masing-masing peserta</li>
    <li>Pemenang ditentukan berdasarkan waktu tercepat dari setiap peserta</li>
    <li>Peserta akan didiskualifikasi jika ketahuan melakukan pelanggaran atau kecurangan sebelum, selama dan sesudah perlombaan berlangsung.</li>
    <li>Keputusan juri tidak dapat diganggu gugat</li>
    <li>Peserta wajib menaati peraturaan yang telah dibuat panitia</li>
</ol>
<h3>Jadwal Alur Perlombaan</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII</li>
    <li>Pendaftaran paling lambat tanggal 14 April 2016.</li>
    <li>Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening <b>Bank Mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Peserta wajib menghadiri TM (Technical Meeting) pada waktu yang sudah ditentukan oleh panitia</li>
</ol>
<h3>Alur Pendaftaran</h3>
<ol>
    <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem</li>
    <li>Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar <b>Rp. 15.000,00</b> rekening <b>Bank mandiri 1370012005217 atas nama Dhiya Mahdi Asriny</b></li>
    <li>Peserta melakukan upload bukti pembayaran ke dalam dashboard sistem (bagi yang melakukan pembayaran melalui transfer bank).</li>
    <li>Setelah selesai melakukan upload bukti pembayaran, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melakukan upload bukti pembayaran</li>
    <li>Peserta akan mendapat balasan email dari panitia</li>
    <li>Peserta juga dapat mendaftar langsung kepada panitia dengan mendatangi kantor lembaga HMTF dengan membawa syarat-syarat yang diperlukan kemudian mengisi formulir dan membayar uang pendaftaran ke panitia.</li>
</ol>
                </div>
            </div>
        </div>
    </div>

@endsection
