@extends('landingpage.index')
@section('content')
<div>
    <!-- Hero -->
    <section>
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4">
                <h1 class="heading-1 mb-4" data-aos="fade-right" data-aos-duration="800">Software Klinik yg Canggih untuk Solusi Manajemen Klinik
                    Anda</h1>
                <p class="subtitle-1 mb-5" data-aos="fade-right" data-aos-duration="800">
                    Optimalkan efisiensi klinik kesehatan,
                    klinik kecantikan, dan
                    klinik gigi Anda dengan
                    <strong>Software aplikasi klinik</strong> kami yang inovatif mengintegrasikan manajemen pasien, jadwal, dan data medis elektronik, serta alat pemasaran yg canggih dalam satu platform.
                </p>

                <a href="https://tools.iconix.id/invoice/client" target="_blank" class="btn btn-light text-primary">Order Sekarang</a>
            </div>
            <div class="col-lg-5 text-center">
                <div class="" style="position: absolute;">
                    <div class="kotak kotak1">E-Medical Record</div>
                    <div class="kotak kotak2">Marketing Automation</div>
                    <div class="kotak kotak3">Transaction/POS</div>
                    <div class="kotak kotak4">Inventory/Stock</div>
                    <div class="kotak kotak5">Accounting</div>
                </div>
                <img class="img-fluid" src="{{ asset('images/landingpage/hero-image.webp') }}" alt="Software Klinik Kecantikan" data-aos="zoom-in">
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

    <!-- Solution -->
    <section>
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="heading-3 mb-5" data-aos="fade-up" data-aos-duration="800">Solusi untuk Pertumbuhan Klinik Anda</h2>

                <div class="single-solution d-flex align-items-center mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/beuaty-clinic.webp') }}" class="img-fluid" alt="Software Beauty Clinic">
                    <h6 class="heading-6 mb-0 ms-3">Software Klinik Kecantikan</h6>
                </div>
                <div class="single-solution d-flex align-items-center mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/health-clinic.webp') }}" class="img-fluid" alt="Software Beauty Clinic">
                    <h6 class="heading-6 mb-0 ms-3">Software Klinik Kesehatan</h6>
                </div>
                <div class="single-solution d-flex align-items-center mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/dental-clinic.webp') }}" class="img-fluid" alt="Software Klinik Gigi">
                    <h6 class="heading-6 mb-0 ms-3">Software Klinik Gigi</h6>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img class="img-fluid" src="{{ asset('images/landingpage/solution.webp') }}" alt="Software Klinik Gigi" style="width:80%">
            </div>
        </div>
    </section>

    <!-- Benefit -->
    <section class="bg-primary-light">
        <div class="text-center mb-5">
            <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Keunggulan Dari Sistem Kami</h3>
            <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Kami selalu menyediakan teknologi terdepan
                untuk pelayanan unggul</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-security.webp') }}" alt="Software Klinik Gigi" class="mb-3">
                    <h4 class="heading-6">Keamanan Data</h4>
                    <p>Dengan database yang selalu dijaga di server dan di-backup secara rutin dalam 3 tingkatan. Anda juga tidak perlu kuatir harddisk rusak.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-meet.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Pakai Windows, MacOS atau apapun!</h4>
                    <p>Software kami berbasis web, bisa diakses lewat komputer/tablet/smartphone dengan OS apapun (Windows, MacOS, Linux, Android, iOS).</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-protect.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Akses Darimana Saja</h4>
                    <p>Dilengkapi SSL untuk enkripsi lalu-lintas data server-client, sehingga dapat diakses darimana pun dan kapan pun dgn aman dan nyaman.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-infra.webp') }}" alt="Software Aesthetic Clinic" class="mb-3">
                    <h4 class="heading-6">Infrastrukur Berkualtias</h4>
                    <p>Pemilihan server cloud database dan jaringan backbone internet yang berkualitas demi keamanan dan kenyamanan data-data klinik Anda</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-update.webp') }}" alt="Software Dental Clinic" class="mb-3">
                    <h4 class="heading-6">Update Rutin</h4>
                    <p>Update aplikasi terbaru secara berkesinambungan - bugs fixed maupun penambahan fitur baru, memastikan sistem selalu optimal dan bermanfaat.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
                    <img src="{{ asset('images/landingpage/icon-support.webp') }}" alt="Software Dental Clinic" class="mb-3">
                    <h4 class="heading-6">Responsive Support</h4>
                    <p>Tim support kami yang akan berusaha membantu Anda sebaik mungkin bila ada kendala saat penggunaan sistem maupun bila terjadi kendala sistem.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- User Map -->
    <section>
        <div class="text-center mb-5">
            <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="600">Telah Digunakan Berbagai Klinik di
                Indonesia</h3>
            <p class="subtitle-1" data-aos="fade-down" data-aos-duration="600">Sebaran ratusan klinik pengguna <bold>software klinik</bold> kami
                di wilayah Indonesia</p> [ cek daftar klinik-klinik klien kami di menu KONTAK ]
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="{{ asset('images/landingpage/map-clinic.webp') }}" alt="Software Dental Clinic" class="img-fluid" data-aos="zoom-in" data-aos-duration="800">
                <p class="my-3 text-center" data-aos="fade-down" data-aos-duration="600">1 penanda di peta bisa mewakili
                    beberapa klinik.
                    <br>Jabodetabek, Bali dan Sumatera terbanyak dalam hal jumlah klinik pengguna.
                </p>
            </div>
        </div>
    </section>

    <!-- Whatsapp Marketing -->
    <section>
        <div class="row justify-content-center">
            <div class="col-lg-9 bg-primary-light card-whatsapp-section">
                <h3 class="heading-3 mb-5 text-center" data-aos="fade-down" data-aos-duration="600">Whatsapp Marketing Khusus
                    untuk
                    Klinik Kecantikan dan Gigi</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-calendar.webp') }}" class="img-fluid" alt="Software Sistem Odontogram">
                            <h6 class="heading-6 mb-0 ms-3">Pesan Otomatis Pengingat Jadwal Perawatan</h6>
                        </div>
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-greeting.webp') }}" class="img-fluid" alt="Software Klinik Kecantikan, Klinik Gigi dan Klinik Spesialis">
                            <h6 class="heading-6 mb-0 ms-3">Ucapan Terima Kasih setelah Kunjungan Perawatan</h6>
                        </div>
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-promo.webp') }}" class="img-fluid" alt="Software Sistem Odontogram">
                            <h6 class="heading-6 mb-0 ms-3">Penawaran Promo ke Setiap Pasien</h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-notify.webp') }}" class="img-fluid" alt="Software Sistem Odontogram">
                            <h6 class="heading-6 mb-0 ms-3">Pengingat Appointment</h6>
                        </div>
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-birthday.webp') }}" class="img-fluid" alt="Software Klinik Spesialis">
                            <h6 class="heading-6 mb-0 ms-3">Ucapan Ulang Tahun Pasien</h6>
                        </div>
                        <div class="single-solution d-flex align-items-center mb-4" data-aos="fade-down" data-aos-duration="600">
                            <img src="{{ asset('images/landingpage/icon-broadcast.webp') }}" class="img-fluid" alt="Software Klinik Spesialis">
                            <h6 class="heading-6 mb-0 ms-3">Broadcast Pesan ke Setiap Pasien</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="card-cta bg-primary-light">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="600">
                        Download Aplikasi Mobile untuk Pasien (versi Demo)
                    </h3>
                    <p class="mb-4" data-aos="fade-down" data-aos-duration="600">
                        Setiap Klinik memiliki mobileApp sendiri, dengan logo, motto dan warna identitas klinik di
                        Google PlayStore
                        (Android) dan Apple AppStore (iOS)
                    </p>
                    <div class="row">
                        <div class="col-lg-auto mb-4" data-aos="fade-down" data-aos-duration="600">
                            <a target="_blank" href="https://www.apple.com/app-store/" class="nav-link p-0 text-white">
                                <img src="{{ asset('images/landingpage/app-store.webp') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" width="180px" />
                            </a>
                        </div>
                        <div class="col-lg-auto mb-4" data-aos="fade-down" data-aos-duration="600">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=id.iconix.mobile" class="nav-link p-0 text-white">
                                <img src="{{ asset('images/landingpage/play-store.webp') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" width="180px" />
                            </a>
                        </div>
                    </div>
                    <p data-aos="fade-down" data-aos-duration="600">* Khusus Klinik Kecantikan</p>
                </div>
                <div class="col-lg-4 d-flex align-items-end justify-content-end">
                    <img src="{{ asset('images/landingpage/cta-download-app.png') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" class="img-fluid d-none d-lg-block" style="max-height: 350px;" data-aos="zoom-in-up" data-aos-duration="600">
                </div>
                <div class="col-lg-4">
                    <ul class="">
                        <strong> FITUR-FITUR UTAMA :</strong>
                        <li>Konsultasi langsung dgn Dokter</li>
                        <li>Order Produk secara langsung</li>
                        <li>Appointment dgn Dokter</li>
                        <li>Menerima Informasi Promo terbaru</li>
                        <li>Melihat Riwayat Perawatan</li>
                        <li>Melihat Riwayat Transaksi</li>
                        <li>Memberi Review dan Rate Pelayanan</li>
                        <li>Melihat Daftar Harga Produk</li>
                        <li>Melihat Daftar Tarif Treatment</li>
                        <li>Mengetahui lokasi Klinik & Cabang</li>
                        <li>dan lain-lain</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection