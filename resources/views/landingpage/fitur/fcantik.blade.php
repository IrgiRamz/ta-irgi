@extends('landingpage.index')
@section('content')
<div>
    <!-- Hero -->
    <section>
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4">
                <h1 class="heading-1 mb-4" data-aos="fade-right" data-aos-duration="800">Fitur untuk Software Klinik Kecantikan</h1>
                <p class="subtitle-1 mb-5" data-aos="fade-right" data-aos-duration="800">Software Klinik Kecantikan yang
                    memenuhi segala kebutuhan Klinik Kecantikan dan Aesthetic Clinic
                    di Indonesia.<br><br>
                    Bisa dijalankan di semua jenis komputer/tablet/smartphone (baik Windows, Linux, MacOS, Android ataupun iOS).</p>

                <a href="https://tools.iconix.id/invoice/client" target="_blank" class="btn btn-light text-primary me-2 mb-3">Order Sekarang</a>
                <a href="{{ url('/hcantik')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
            </div>
            <div class="col-lg-5 text-center">
                <img class="img-fluid" src="{{ asset('images/landingpage/hero-image-beauty.webp') }}" alt="Software Klinik Kecantikan" data-aos="zoom-in" style="width:80%">
            </div>
        </div>
    </section>

    <!-- Registered at -->
    <section>
        <h6 class="heading-6 text-center mb-4">Telah terdaftar dan diverifikasi</h6>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
                <div class="single-verified d-flex align-items-center mb-3">
                    <img src="{{ asset('images/landingpage/logo-kominfo.webp') }}" class="img-fluid" alt="Software Klinik Kecantikan">
                    <a href="https://pse.kominfo.go.id/" class="nav-link" target="_blank">
                        <p>PSE : Penyelenggara Sistem Elektronik, registered at Kominfo RI</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
                <div class="single-verified d-flex align-items-center mb-3">
                    <img src="{{ asset('images/landingpage/logo-satusehat.webp') }}" class="img-fluid" alt="Software Beauty Clinic">
                    <a href="https://satusehat.kemkes.go.id/platform" class="nav-link" target="_blank">
                        <p>RME : Rekam Medik Elektronik, verified by SATUSEHAT Kemenkes RI</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefit -->
    <section class="bg-primary-light">
        <div class="text-center mb-5">
            <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Fitur Unggulan Aplikasi Khusus Klinik Kecantikan</h3>
            <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Kami selalu menyediakan teknologi
                terdepan untuk pelayanan unggul</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-package.webp') }}" alt="Software Beauty Clinic" class="mb-3">
                    <h4 class="heading-6">Sistem Paket dan Reguler</h4>
                    <p>Dengan adanya sistem yg terpadu, pencarian data-data perawatan pasien menjadi jauh lebih mudah,
                        cepat dan akurat, termasuk untuk paket treatment (jumlah visit yg telah/belum dilakukan dan sisa
                        pembayarannya)</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-stock.webp') }}" alt="Software Beauty Clinic" class="mb-3">
                    <h4 class="heading-6">Manajemen Stok Produk/Bahan</h4>
                    <p>Semua transaksi yg melibatkan barang/ produk/ obat (penjualan langsung/ bebas, penjualan
                        resep/home-care, dan bahkan pemakaian bahan perawatan pun) semuanya tercatat lengkap dan detil
                        di kartu stok elektronik.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-calendar.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Appointment & Booking</h4>
                    <p>Dokter bisa menentukan jadwal perawatan baru ke pasiennya, sebaliknya pasien juga bisa melakukan
                        booking (melalui mobile-app), dan bisa di re-schedule jadwalnya. Otomatis Pasien menerima
                        pengingat SMS/Email/WhatsApp.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-photo.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Ambil Photo Perawatan</h4>
                    <p>Sebelum dan sesudah perawatan bisa diambil langsung photonya melalui smartphone atau tablet
                        (Android/iOS), atau bisa juga melalui webcam dan kamera digital. Photo ini bisa dilihat lewat
                        Riwayat Perawatan Pasien.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-merchant.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Integrasi Multi Cabang</h4>
                    <p>Rekam medik pasien secara realtime terkoneksi antar cabang, gudang pusat bisa dengan mudah
                        memantau stok di setiap cabang, dan pusat bisa memantau perkembangan klinik-cabang secara
                        realtime dan uptodate.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-broadcast.webp') }}" alt="Aplikasi Klinik Kecantikan" class="mb-3">
                    <h4 class="heading-6">Marketing Automation</h4>
                    <p>Pengiriman Otomatis EMAIL, SMS & WhatsApp sangat memudahkan Anda mengajak klien Anda untuk
                        kembali. Dilengkapi template email yg cantik dan target penerima yg bisa disesuaikan.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-analyze.webp') }}" alt="Aplikasi Klinik Kecantikan" class="mb-3">
                    <h4 class="heading-6">5 Level Membership</h4>
                    <p>Sistem kami mampu memberikan sampai 5 level member untuk pasien klinik. Tingkatan member tsb bisa diatur berapa minimal/maksimal total transaksi agar menjadi member level tertentu, serta berapa diskon yg harus diberikan kepada pasien tsb.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-mobile.webp') }}" alt="Aplikasi Klinik Kecantikan" class="mb-3">
                    <h4 class="heading-6">Manajemen Ruang & Bed</h4>
                    <p>Kami menyediakan menu untuk mengatur jumlah ruang dan bed perawatan sehingga setiap perawatan maupun appointment pasien bisa diketahui tingkat ketersediaannya secara realtime.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-meet.webp') }}" alt="Software Aplikasi Beauty Clinic" class="mb-3">
                    <h4 class="heading-6">Komisi/Jasa Medik Dokter memiliki 3 level</h4>
                    <p>Perhitungan Komisi (jasa Medik) untuk setiap perawatan oleh Dokter & Beautician bisa dibedakan berdasarkan jenis perawatan maupun levelnya (misal: Standar, Senior, Spesialis).</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-analyze.webp') }}" alt="Aplikasi Klinik Kecantikan" class="mb-3">
                    <h4 class="heading-6">Grafik Analisa Data Kunjungan</h4>
                    <p>Pada panel dashboard software kami sediakan tampilan grafik data keuangan, statistik kunjungan
                        berdasar usia, waktu kunjungan, pekerjaan, asal kota, 5 produk terlaris dan treatment paling
                        diminati dalam 1 bulan</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-mobile.webp') }}" alt="Aplikasi Klinik Kecantikan" class="mb-3">
                    <h4 class="heading-6">Aplikasi Mobile App untuk Pasien</h4>
                    <p>Pasien bisa menerima Informasi Promo, Booking/Appointment dengan Dokter, melihat Riwayat
                        Perawatan, Daftar Harga Produk dan Treatment, bisa meminta Konsultasi Online serta Order Produk
                        langsung dari aplikasi</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-meet.webp') }}" alt="Software Aplikasi Beauty Clinic" class="mb-3">
                    <h4 class="heading-6">Konsultasi Video (Dokter-Pasien)</h4>
                    <p>Dokter bisa langsung melakukan konsultasi realtime lewat Video 2 arah, dimana Klien/Pasien
                        membukanya lewat aplikasi android/iOS atau website (khusus versi Corporate)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- All Feature -->
    <section>
        <div class="row align-items-center">
            <div class="col-lg-5 order-1 order-lg-2">
                <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Fitur Software kami yg lain</h3>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Sistem otomatis mengirimkan email laporan harian ke owner/manajer</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Dokter bisa langsung ambil foto pasien dari kamera smartphone</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Konsultasi melalui Video Call antara Dokter dgn Pasien secara realtime</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">SMS/Email/WhatsApp bisa otomatis kirim pengingat rencana perawatan ke pasien</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Invoice bisa langsung dikirim via WhatsApp dalam format struk asli (PDF)</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Pembayaran di kasir bisa gabungan dari tunai, k.debit, k.kredit dan e-money
                    </p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Perhitungan fee/komisi pelayanan dokter & beautician terhitung secara realtime</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="ri-checkbox-circle-fill text-success me-2"></i>
                    <p class="mb-0">Setiap User memiliki hak akses masing-masing (diatur administrator)</p>
                </div>
            </div>
            <div class="col-lg-5 text-center p-4 order-2 order-lg-1">
                <img class="img-fluid" src="{{ asset('images/landingpage/beauty-feature.webp') }}" alt="Software Aplikasi Beauty Clinic" data-aos="zoom-in" width="80%">
            </div>
        </div>
    </section>

    <!-- Preview -->
    <section>
        <div class="card-cta bg-primary-light pb-0">
            <div class="row">
                <div class="col-lg-10 text-center">
                    <div class="text-center mb-5">
                        <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Tunggu Apalagi <br>Segera Gunakan Layanan Kami</h3>
                        <a href="{{ url('/hcantik')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
                    </div>

                    <div class="position-relative">
                        <img src="{{ asset('images/landingpage/beauty-mockup.webp') }}" alt="Software Aplikasi Beauty Clinic" class="img-fluid">
                        <div class="video-btn video-btn-pos">
                            <a class="play-btn popup-youtube" target="_blank" href="https://www.youtube.com/watch?v=WN2-DPVsTM8">
                                <i class="ri-play-line"></i>
                            </a>
                            <div class="spinner-eff">
                                <div class="spinner-circle circle-1"></div>
                                <div class="spinner-circle circle-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection