@extends('landingpage.index')
@section('content')
<div>
   <!-- Hero -->
<section>
  <div class="row align-items-center">
      <div class="col-lg-5 mb-4">
          <h1 class="heading-1 mb-4" data-aos="fade-right" data-aos-duration="800">Fitur untuk Software Klinik Kesehatan</h1>
          <p class="subtitle-1 mb-5" data-aos="fade-right" data-aos-duration="800">Software Klinik Kesehatan yang
              memenuhi segala kebutuhan Klinik Poli Umum dan Spesialis (baik Klinik Pratama maupun Klinik Utama) di Indonesia.<br><br>
              Bisa dijalankan di semua jenis komputer/tablet/smartphone (baik Windows, Linux, MacOS, Android ataupun iOS).</p>

          <a href="https://tools.iconix.id/invoice/client"
              target="_blank" class="btn btn-light text-primary me-2 mb-3">Order Sekarang</a>
          <a href="{{ url('/hklinik')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
      </div>
      <div class="col-lg-5 text-center">
          <img class="img-fluid" src="{{ asset('images/landingpage/hero-image-health.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat"
              data-aos="zoom-in" style="width:80%">
      </div>
  </div>
</section>

<!-- Registered at -->
<section>
  <h6 class="heading-6 text-center mb-4">Telah terdaftar dan diverifikasi</h6>
  <div class="row justify-content-center align-items-center">
      <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
          <div class="single-verified d-flex align-items-center mb-3">
              <img src="{{ asset('images/landingpage/logo-kominfo.webp') }}" class="img-fluid" alt="Software Klinik Kesehatan siap integrasi SatuSehat">
              <a href="https://pse.kominfo.go.id/" class="nav-link" target="_blank"><p>PSE : Penyelenggara Sistem Elektronik, registered at Kominfo RI</p></a>
          </div>
      </div>
      <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="600">
          <div class="single-verified d-flex align-items-center mb-3">
              <img src="{{ asset('images/landingpage/logo-satusehat.webp') }}" class="img-fluid" alt="Software Klinik Kesehatan siap integrasi SatuSehat">
              <a href="https://satusehat.kemkes.go.id/platform" class="nav-link" target="_blank"><p>RME : Rekam Medik Elektronik, verified by SATUSEHAT Kemenkes RI</p></a>
          </div>
      </div>
  </div>
</section>

<!-- Benefit -->
<section class="bg-primary-light">
  <div class="text-center mb-5">
      <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Fitur Unggulan Aplikasi Khusus Klinik Kesehatan</h3>
      <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Kami selalu menyediakan teknologi
          terdepan untuk pelayanan unggul</p>
  </div>
  <div class="row justify-content-center">
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-bpjs.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">BPJS Bridging/PCare Ready</h4>
              <p>Brdging BPJS merupakan sistem yg memungkinkan untuk melakukan entry data sekaligus di 2 sistem, sistem di lokal klinik (software Klinik) dan sistem di server BPJS (dalam hal ini PCare).</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-clinic.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Jenis Poli Spesialis Tidak Terbatas</h4>
              <p>Kami sudah sediakan 2 poli (Umum dan Gigi) di sistem, yg lain bisa ditambahkan sendiri nama/jenis Poli, tidak ada batasan penambahan jumlah poli (misal: Umum, Anak, Kandungan, Mata, Gigi, THT, Bedah, dsb)</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-dna.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Modul Laboratorium & Radiologi</h4>
              <p>Modul Lab dan Radiologi terintegrasi dengan Modul Pemeriksaan Dokter, sehingga langsung terhubung dengan Kasir (untuk pembayaran) dan Bagian Lab atau Radiologi untuk pengisian Hasil Pemeriksaaan serta cetak hasilnya.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-insurance.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Daftar Asuransi/Perusahaan Penjamin</h4>
              <p>Sebagai penanggung biaya rawat Pasien. Tersedia setup data tarif tindakan per asuransi/perusahaan penjamin, sehingga setiap Asuransi bisa memiliki tarifnya masing-masing</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-money.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Perhitungan Fee Dokter/Perawat</h4>
              <p>Secara realtime rekapitulasi komisi/jasa medik dokter bisa langsung dilihat setiap saat, karena perhitungannya dilakukan langsung setelah transkasi pembayaran di kasir tuntas dilakukan.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-capsule.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Manajemen Stok Produk/Bahan</h4>
              <p>Semua transaksi yg melibatkan obat (penjualan obat bebas, penjualan resep, dan bahkan pemakaian bahan habis pakai) semuanya tercatat lengkap di kartu stok elektronik.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-receipt.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Cetak Surat Sakit/Sehat/Rujukan</h4>
              <p>Sistem menyediakan fitur mencetak surat-surat untuk pasien (keterangan sakit, sehat dan surat rujukan ke instansi lain). Selain itu juga disediakan isian untuk No.Surat sesuai format yg sudah ditetapkan oleh Klinik.</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-history.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Cetak Riwayat Pasien</h4>
              <p>Sistem menyediakan fitur untuk mencetak Riwayat Perawatan Pasien sesuai periode waktu yg dipilih. Selain itu, sistem juga menyediakan form untuk upload riwayat pasien lama yg masih berupa kertas (hard-copy).</p>
          </div>
      </div>
      <div class="col-lg-4 mb-4">
          <div class="single-benefit" data-aos="zoom-in-up" data-aos-duration="800">
              <img src="{{ asset('images/landingpage/icon-form.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="mb-3">
              <h4 class="heading-6">Pembuatan Inform Concern</h4>
              <p>Untuk tindakan-tindakan tertentu, dibutuhkan persetujuan dari pasien/keluarganya sebelum dilakukan tindakan tsb. Sistem akan otomatis membuatkan Inform Concern tsb bila tindakan yg akan dilakukan dikategorikan resiko tinggi</p>
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
              <p class="mb-0">Poli spesialis tidak dibatasi, bisa ditambahkan sendiri setiap saat.</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Integrasi SatuSehat Kemenkes RI untuk Rekam Medik Elektronik Pasien</p>
          </div>
          <div class="d-flex mb-3">
              <i class="ri-checkbox-circle-fill text-success me-2"></i>
              <p class="mb-0">Hasil Pemeriksaan Lab bisa langsung dicetak (format cetak sudah disediakan)</p>
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
          <img class="img-fluid" src="{{ asset('images/landingpage/health-feature.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" data-aos="zoom-in"
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
                  <a href="{{ url('/hklinik')}}" class="btn btn-outline-light text-hover-primary mb-3">Lihat Paket Harga</a>
              </div>

              <div class="position-relative">
                  <img src="{{ asset('images/landingpage/health-mockup.webp') }}" alt="Software Klinik Kesehatan siap integrasi SatuSehat" class="img-fluid">
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