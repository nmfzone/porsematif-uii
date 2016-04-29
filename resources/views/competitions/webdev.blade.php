@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <div class="contest-logo">
            <img src="{{ asset('assets/images/webdev.png') }}">
        </div>
        <h3 class="title">Web Development</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Detail</a></li>
                <li><a href="#tab2">Syarat dan Ketentuan</a></li>
                <li><a href="#tab3">Pengumpulan Karya</a></li>
                <li><a href="#tab4">Download</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
                    Web Development Competition (WDC) {{ Site::get('site_name') }} merupakan kompetisi berupa membangun sebuah aplikasi berbasis web. Web Development Competition terbuka bagi mahasiswa seluruh universitas di Yogyakarta. Kompetisi ini bertujuan untuk menyaring bakat-bakat muda di Yogyakarta, melalui ide-ide <i>briliant</i> mereka.
                    <h3>Alur Pendaftaran</h3>
                    <ol>
                        <li>Melakukan pendaftaran account tim <a href="{{ url('auth/register') }}" target="_blank">disini</a>, kemudian mengisi identitas masing-masing anggota di dalam dashboard sistem atau mendaftar pada stand di kantor HMTF FTI UII.</li>
                        <li>Peserta melunasi biaya pendaftaran sebesar <b>Rp. 50.000,00</b> ke rekening Mandiri <b>1370012005217 a/n DHIYA MAHDI ASRINY</b>.</li>
                        <li>Peserta melakukan upload bukti pembayaran dan surat pernyataan ke dalam dashboard sistem.</li>
                        <li>Setelah selesai melakukan upload bukti pembayaran dan surat pernyataan, peserta mengkonfirmasi di nomor 085600095453 (siwi) bahwa kelompok tersebut telah melengkapi seluruh persyaratan untuk mengikuti kompetisi Web Development Competition.</li>
                        <li>Peserta akan mendapat balasan email dari panitia mengenai status keikutsertaannya dalam acara Porsematif 2016</li>
                    </ol>
                    <h3>Timeline Kompetisi</h3>
                    <ol>
                        <li>Pendaftaran Online : 22 Maret - 25 April 2016</li>
                        <li>Pengumpulan Proposal : 22 Maret - 30 April 2016 pukul 24:00</li>
                        <li>Babak Final : 4 Mei 2016</li>
                    </ol>
                    <h3>Alur Kompetisi</h3>
                    <ol>
                        <li>Seleksi ide dan proposal.</li>
                        <li>10 Tim terbaik akan maju ke babak final.</li>
                        <li>Babak final berupa presentasi aplikasi di depan dewan juri, bertempat di Auditorium Fakultas Teknologi Industri, Universitas Islam Indonesia.</li>
                    </ol>
                </div>
                <div id="tab2" class="tabContent">
                    <h3>Syarat Peserta</h3>
                    <ul>
                        <li>Peserta merupakan mahasiswa aktif D1/D2/D3/D4/S1 dalam lingkup perguruan tinggi di Yogyakarta.</li>
                        <li>Peserta wajib mengumpulkan surat pernyataan dari Universitas peserta, yang menyatakan bahwasanya peserta yang bersangkutan adalah benar-benar mahasiswa yang berasal dari Universitas tersebut.</li>
                        <li>Peserta harus mengisi pendaftaran dengan lengkap dan memberikan informasi yang dapat dipertanggung jawabkan.</li>
                        <li>Peserta merupakan tim yang beranggotakan maksimal 3 orang dalam satu universitas yang sama.</li>
                        <li>Jumlah tim dalam satu universitas tidak dibatasi.</li>
                        <li>Satu orang tidak boleh terdaftar di lebih dari 1 tim.</li>
                        <li>Pergantian anggota tim selama kompetisi tidak diperkenankan.</li>
                    </ul>
                    <h3>Syarat Karya</h3>
                    <ul>
                        <li>Karya harus bisa direalisasikan menjadi bentuk aplikasi yang mempunyai nilai artistik, imajinatif, dan inovatif.</li>
                        <li>Semua karya pemenang tetap menjadi milik peserta.</li>
                        <li>Peserta bebas menggunakan resource apapun (Framework, Template, dll) asalkan sesuai ketentuan dibawah.</li>
                        <li>Ide dan website yang di ikut sertakan dalam lomba belum pernah memenangkan kejuaraan sebelumnya.</li>
                        <li>Konten yang digunakan tidak boleh menyinggung SARA dan melanggar hak cipta.</li>
                        <li>Panitia {{ Site::get('site_name') }} berhak mendiskualifikasi peserta jika diketahui Hak Atas Kekayaan Intelektualnya diragukan, sedang dalam sengketa, mengambil karya orang lain, atau mendapatkan klaim dari pihak lain.</li>
                        <li>Semua kecurangan berakibat diskualifikasi bagi peserta dan/atau pengurangan nilai.</li>
                        <li>Keputusan juri tidak dapat diganggu gugat.</li>
                        <li>Peraturan yang belum ada akan ditambahkan kemudian hari bila diperlukan.</li>
                    </ul>
                    <h3>Detail Proposal</h3>
                    <ul>
                        <li>Format, Outline Konten, dan Layout Proposal bebas, minimal 8 halaman A4</li>
                        <li>Proposal dibuat semenarik mungkin sesuai kreatifitas peserta</li>
                        <li>Proposal harus berupa file PDF (*.pdf)</li>
                    </ul>
                    <h3>Kriteria Penilaian</h3>
                    <h4>Proposal</h4>
                    <ul>
                        <li>Penyelesaian masalah</li>
                        <li>Inovasi (Originalitas dan Kreatifitas)</li>
                        <li>Layout dan Design</li>
                        <li>Tata bahasa penulisan</li>
                    </ul>
                    <h4>Babak Final</h4>
                    <ul>
                        <li>Kelengkapan materi</li>
                        <li>Kesesuaian aplikasi dengan proposal</li>
                        <li>Penyampaian presentasi</li>
                        <li>Jawaban atas pertanyaan juri</li>
                    </ul>
                </div>
                <div id="tab3" class="tabContent">
                    <h3>Pengumpulan Proposal</h3>
                    <ul>
                        <li>Proposal dikompres dengan ekstensi *.rar atau *.zip dengan format nama PORSEMATIF2016-WDC-[NAMA TIM]-[JUDUL PROPOSAL].<br>
                        Contoh : PORSEMATIF2016-WDC-BangoFC-Rumah Goyang</li>
                        <li>Ukuran File maksimum yaitu 50 Mb</li>
                        <li>Proposal di upload pada bagian upload karya di dashboard team. (Setelah akun terverifikasi)</li>
                        <li>Tim yang lolos akan diumumkan melalui website {{ Site::get('site_name') }} ini dan juga melalui email tim.</li>
                    </ul>
                </div>
                <div id="tab4" class="tabContent">
                    None
                </div>
            </div>
        </div>
    </div>

@endsection
