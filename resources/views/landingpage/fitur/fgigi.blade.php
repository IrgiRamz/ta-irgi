@extends('landingpage.index')
@section('content')
<div>
    <!-- Hero -->
 <section>
  <div class="row align-items-center">
      <div class="col-lg-5 mb-4">
          <h1 class="heading-1 mb-4" data-aos="fade-right" data-aos-duration="800">Fitur untuk Software Klinik Gigi</h1>
          <p class="subtitle-1 mb-5" data-aos="fade-right" data-aos-duration="800">Software Klinik Gigi yang lengkap dan mudah, untuk
              memenuhi segala kebutuhan Klinik Gigi dan Praktek Dokter Gigi di Indonesia.<br><br>
              Bisa dijalankan di semua jenis komputer/tablet/smartphone (baik Windows, Linux, MacOS, Android ataupun iOS).
          </p>

          <a href="https://tools.iconix.id/invoice/client"
              target="_blank" class="btn btn-light text-primary me-2 mb-3">Order Sekarang</a>
          <a href="{{ url('/hgigi')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
      </div>
      <div class="col-lg-5 text-center">
          <img class="img-fluid" src="{{ asset('images/landingpage/hero-image-dental.webp') }}" alt="Software Klinik Gigi, Dental Care, Dental Clinic" data-aos="zoom-in" style="width:80%">
      </div>
  </div>
</section>

<!-- Registered at -->
<section>
  <h6 class="heading-6 text-center mb-4">Telah terdaftar dan diverifikasi</h6>
  <div class="row justify-content-center align-items-center">
      <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
          <div class="single-verified d-flex align-items-center mb-3">
              <img src="{{ asset('images/landingpage/logo-kominfo.webp') }}" class="img-fluid" alt="Software Klinik Gigi, Dental Care, Dental Clinic">
              <a href="https://pse.kominfo.go.id/" class="nav-link" target="_blank"><p>PSE : Penyelenggara Sistem Elektronik, registered at Kominfo RI</p></a>
          </div>
      </div>
      <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
          <div class="single-verified d-flex align-items-center mb-3">
              <img src="{{ asset('images/landingpage/logo-satusehat.webp') }}" class="img-fluid" alt="Software Aplikasi Klinik Gigi">
              <a href="https://satusehat.kemkes.go.id/platform" class="nav-link" target="_blank"><p>RME : Rekam Medik Elektronik, verified by SATUSEHAT Kemenkes RI</p></a>
          </div>
      </div>
  </div>
</section>

<!-- Benefit -->
<section class="bg-primary-light">
  <div class="text-center mb-5">
      <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Fitur Unggulan Aplikasi Khusus Klinik Gigi</h3>
      <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Kami selalu menyediakan teknologi
          terdepan untuk pelayanan unggul</p>
  </div>
  <div class="row justify-content-center">
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-teeth.webp') }}" alt="Software Aplikasi Klinik Gigi" class="mb-3">
              <h4 class="heading-6">Data Lengkap Odontogram</h4>
              <p>Data No.Gigi (Anak & Dewasa), Data Tindakan dan Kondisi per Bagian Gigi, Riwayat Perawatan dan Tindakan (semua ditampilkan dalam format Gambar & Warna per bagian gigi)</p>
          </div>
      </div>

      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-merchant.webp') }}" alt="Software Aplikasi Klinik Gigi" class="mb-3">
              <h4 class="heading-6">Integrasi Multi Cabang</h4>
              <p>Rekam medik pasien secara realtime terkoneksi antar cabang, dan klinik pusat bisa memantau perkembangan seluruh klinik-cabang secara realtime dan up-to-date</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-mobile.webp') }}" alt="Software Aplikasi Dental Care" class="mb-3">
              <h4 class="heading-6">Mobile App (Android/iOS)</h4>
              <p>Aplikasi native Android dan/atau iOS untuk Klien/Pasien yg ingin konsultasi langsung, appointment, cek promo terbaru, lihat daftar harga treatment dan produk, dsb</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-package.webp') }}" alt="Software Aplikasi Dental Care" class="mb-3">
              <h4 class="heading-6">Sistem Paket dan Reguler</h4>
              <p>Dengan adanya sistem yg terpadu, pencarian data-data perawatan pasien menjadi jauh lebih mudah, cepat dan akurat, termasuk untuk paket treatment (jumlah visit yg telah/belum dilakukan dan sisa pembayarannya)</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-stock.webp') }}" alt="Software Aplikasi Dental Clinic" class="mb-3">
              <h4 class="heading-6">Manajemen Stok Produk/Bahan</h4>
              <p>Semua transaksi yg melibatkan barang/ produk/ obat (penjualan langsung/ bebas, penjualan resep/home-care, dan bahkan pemakaian bahan perawatan pun) semuanya tercatat lengkap dan detil di kartu stok elektronik.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-calendar.webp') }}" alt="Software Aplikasi Dental Clinic" class="mb-3">
              <h4 class="heading-6">Appointment & Booking</h4>
              <p>Dokter bisa menentukan jadwal perawatan baru ke pasiennya, sebaliknya pasien juga bisa melakukan booking (melalui mobile-app), dan bisa di re-schedule jadwalnya. Otomatis Pasien menerima SMS/Email pengingat.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-photo.webp') }}" alt="Software Aplikasi Dental Clinic" class="mb-3">
              <h4 class="heading-6">Ambil/Upload Photo/Rontgent</h4>
              <p>Foto perawatan/rontgent bisa diambil langsung lewat browse lokasi file, atau melalui smartphone/tablet (Android/iOS), atau bisa melalui webcam dan kamera digital. Photo ini bisa dilihat lewat Riwayat Perawatan Pasien.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-whatsapp.webp') }}" alt="Software Administrasi Klinik Gigi" class="mb-3">
              <h4 class="heading-6">Pesan Otomatis via WhatsApp (New!)</h4>
              <p>Sistem bisa secara otomatis kirim pesan via WhatsApp (pengingat jadwal perawatan, ultah pasien, ucapan terima kasih setelah kunjungan, pesan promo) maupun secara manual dan terjadwal (misal kirim pesan ke target tertentu).</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-insurance.webp') }}" alt="Software Administrasi Klinik Gigi" class="mb-3">
              <h4 class="heading-6">Daftar Asuransi/Perusahaan Penjamin</h4>
              <p>Aplikasi Akuntansi terkoneksi dengan Kasir, sehingga setiap transaksi yg terjadi di Kasir langsung terposting ke jurnal akuntansi secara realtime. Tersedia Laporan mulai dari Jurnal, Buku Besar, Arus Kas, Laba Rugi dan Neraca</p>
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
              <p class="mb-0">Sistem secara otomatis mengirimkan email laporan harian ke owner/manajer</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">WhatsApp/SMS bisa otomatis kirim pengingat appointment dan promo klinik</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Struk/Invoice untuk Pasien bisa langsung dikirim lewat WhatsApp (format PDF)</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Dokter bisa langsung ambil foto pasien dari kamera smartphone</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Pembayaran di kasir bisa gabungan dari tunai, k.debit, k.kredit atau e-money</span></p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Modul Asuransi serta model tarif tindakannya di masing-masing Asuransi</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Ubah/hapus data hanya bisa dilakukan user dgn jabatan administrator</p>
          </div>
      </div>
      <div class="col-lg-5 text-center p-4 order-2 order-lg-1">
          <img class="img-fluid" src="{{ asset('images/landingpage/dental-feature.webp') }}" alt="Software Administrasi Klinik Gigi" data-aos="zoom-in"
              width="80%">
      </div>
  </div>
</section>

<!-- Preview -->
<section>
  <div class="card-cta bg-primary-light pb-0">
      <div class="row">
          <div class="col-lg-10 text-center">
              <div class="text-center mb-5">
                  <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Tunggu Apalagi <br>Segera
                      Gunakan Layanan Kami</h3>
                  <a href="{{ url('/hgigi')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
              </div>

              <div class="position-relative">
                  <img src="{{ asset('images/landingpage/dental-mockup.webp') }}" alt="Software Administrasi Klinik Gigi" class="img-fluid">
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