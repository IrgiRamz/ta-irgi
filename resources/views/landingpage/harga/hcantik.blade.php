@extends('landingpage.index')
@section('content')
<div>
 <!-- Pricing -->

 <section>
  <div class="text-center mb-5">
      <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Harga Software Klinik Kecantikan
      </h3>
      <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Kami selalu menyediakan teknologi
          terdepan untuk pelayanan unggul</p>
  </div>

  <div class="row justify-content-center">

      <div class="col-lg-4 mb-3">
          <div class="single-pricing">
              <h5 class="heading-5 text-dark mb-4">Business</h5>
              <div class="d-flex align-items-center mb-4">
                  <h4 class="heading-4 text-primary">Rp 475.000</h4>
                  <span class="text-muted">/bulan</span>
              </div>

              <div class="info-pricing mb-4">
                  Ambil 1 tahun hanya bayar 10 bulan (Diskon Rp.950.000,-)
              </div>

              <div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Unlimited Users/Computers</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Multi Dokter/Beautician</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Modul Depo/Apotek</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Manajemen Stok Produk/Obat/Bahan</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Pembelian dari Supplier</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Resep & Obat Bebas</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Electronic Medical Records</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">5 Level membership Pasien</span> -> <span class="blink">New</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Management Ruang - Bed</span> -> <span class="blink">New</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">3 Level Dokter/Beautician -> Fee Treatment</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Treatment Non Paket</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Gudang Besar (Supplier Cabang)</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi utk Paket Treatment</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Photo Treatment (Before + After)</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-close-line text-muted me-2 mt-1"></i>
                      <span class="text-muted text-line-through">Sketsa Wajah Perawatan Pasien</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-close-line text-muted me-2 mt-1"></i>
                      <span class="text-muted text-line-through">Terintegrasi Platform SATUSEHAT</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Terintegrasi antar Cabang</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Email Marketing</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-close-line text-muted me-2 mt-1"></i>
                      <span class="text-muted text-line-through">Whatsapp Marketing</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-close-line text-muted me-2 mt-1"></i>
                      <span class="text-muted text-line-through">Video Consultation with Doctor (w/ MobileApp)</span>
                  </div>
              </div>

              <a href="{{ route('order.create') }}" target="_blank"
                  class="btn w-100 text-center mt-4" style="background-color: green; color: white;">Pesan Sekarang</a>
          </div>
      </div>
      <div class="col-lg-4 mb-3">
          <div class="single-pricing">
              <h5 class="heading-5 text-dark mb-4">Premium</h5>
              <div class="d-flex align-items-center mb-4">
                  <h4 class="heading-4 text-primary">Rp 575.000</h4>
                  <span class="text-muted">/bulan</span>
              </div>

              <div class="info-pricing mb-4">
                  Ambil 1 tahun hanya bayar 10 bulan (Diskon Rp.1.150.000,-)
              </div>

              <div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Unlimited Users/Computers</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Multi Dokter/Beautician</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Modul Depo/Apotek</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Manajemen Stok Produk/Obat/Bahan</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Pembelian dari Supplier</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Resep & Obat Bebas</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Electronic Medical Records</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">5 Level membership Pasien</span> -> <span class="blink">New</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Management Ruang - Bed</span> -> <span class="blink">New</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">3 Level Dokter/Beautician -> Fee Treatment</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi Treatment Non Paket</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Gudang Besar (Supplier Cabang)</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Transaksi utk Paket Treatment</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Photo Treatment (Before + After)</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Sketsa Wajah Perawatan Pasien</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Terintegrasi Platform SATUSEHAT</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Terintegrasi antar Cabang</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Email Marketing</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Whatsapp Marketing</span>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="ri-check-line text-success me-2 mt-1"></i>
                      <span class="text-dark">Video Consultation with Doctor (w/ MobileApp)</span>
                  </div>
              </div>

              <a href="{{ route('order.create') }}" target="_blank"
                  class="btn w-100 text-center mt-4" style="background-color: orangered; color: white;">Pesan Sekarang</a>
          </div>
      </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-lg-8">
          <p>&nbsp;</p>
          <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">CATATAN PENTING :</h3>

          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Harga dan fitur bisa berubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu</span>
          </div>

          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Pembayaran dilakukan dimuka, <strong>minimal pemakaian 1 bulan</strong> (untuk AddOn Android/iOS App
                  minimal 12 bulan pemakaian)</span>
          </div>
          
          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Biaya tambahan untuk klinik cabang <strong>Rp.375.000/bulan/cabang</strong> (berlaku untuk semua versi, dan ambil 12 bulan hanya bayar 10 bulan)</span>
          </div>

          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Biaya Pembuatan Aplikasi (untuk Pasien - tidak wajib) versi Android : Rp. 5 juta (sekali bayar) & versi iOS : Rp. 7,5 juta (sekali bayar)</span>
          </div>

          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Untuk pengiriman pesan via WhatsApp tidak ada batasan jumlah pengiriman pesan, bisa ke semua nomor, berapapun jumlahnya.<br> Untuk pengiriman pesan via WhatsApp ini kami menggunakan unOfficial API dari WhatsApp (Meta Corp).</span>
          </div>
          
          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Untuk pengiriman pesan via WhatsApp menggunakan Official API dari WhatsApp silahkan ke <a href="https://www.netstream.app" target="_blank" style="color: yellow; font-weight: 800;">NetStream</a> untuk mengkonsultasikan kebutuhan klinik Anda.</span>
          </div>
          <!--
          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Ketersediaan aplikasi Android di PlayStore bisa dijamin 100% berhasil dan siap didownload.</span>
          </div>

          <div class="d-flex mb-3">
              <i class="ri-arrow-right-circle-line text-white me-2 mt-1"></i>
              <span>Karena kebijakan terbaru dari pihak Apple, maka mulai Januari 2020 pihak klinik
                  sendiri yg harus men-submit ke AppStore (nama aplikasi iOS harus sama dengan nama Klinik - sesuai dokumen merk), kami
                  sebagai pengembang software membantu menyiapkan aplikasinya dan proses submit ke AppStore sampai tuntas.</span>
          </div>
          -->
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
                      Gunakan Layanan Kami</h3><br>
                      <a href="{{ url('/fcantik')}}"
                      class="btn btn-light text-primary me-2 mb-3">Pelajari Fitur Software</a>
              </div>

              <div class="position-relative">
                  <img src="{{ asset('images/landingpage/beauty-mockup.webp') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" class="img-fluid">
                  <div class="video-btn video-btn-pos">
                      <a class="play-btn popup-youtube" target="_blank"
                          href="https://www.youtube.com/watch?v=WN2-DPVsTM8">
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

<!-- FAQ -->
<section class="bg-primary-light">
  <div class="text-center mb-5">
      <h3 class="heading-3 mb-3" data-aos="fade-down" data-aos-duration="800">Frequently Asked Question (FAQ)</h3>
      <p class="subtitle-1" data-aos="fade-down" data-aos-duration="800">Pertanyaan yg sering ditanyakan dan jawabannya</p>
  </div>
  <div class="row justify-content-center">
      <div class="col-lg-10">
          <div class="accordion" id="accordionExample">
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Apakah ada batasan jumlah record data ?
                      </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Kami tidak memberikan batasan jumlah record data apapun yg bisa disimpan di server kami,
                          pada semua versi diatas.
                      </div>
                  </div>
              </div>
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Apakah kami bisa pindah versi setiap saat ?
                      </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Iya, pasti! kapan pun Anda bisa melakukan upgrade atau downgrade versi, silahkan hubungi
                          kami untuk proses tersebut.
                      </div>
                  </div>
              </div>
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Apakah kami bisa meminta data kami setiap saat ?
                      </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Database yg tersimpan di server kami pada dasarnya milik Klinik, karena itu Anda bisa meminta setiap saat database tersebut.
                      </div>
                  </div>
              </div>
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Berapa lama proses aktivasi account kami ?
                      </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Account dan akses ke sistem langsung aktif maksimal 5 menit sejak konfirmasi pembayaran kami terima - khusus Hari/Jam Kerja (apabila diluar Hari/Jam Kerja sekitar 30 menit).
                      </div>
                  </div>
              </div>
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Apakah kami mendapatkan training sebelum mulai pemakaian software tsb ?
                      </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Yup, khusus untuk wilayah Jabodetabek, kami bisa hadir di lokasi klinik untuk memberikan training - GRATIS untuk pemakaian 12 bulan<br>Sedangkan diluar Jabodetabek kami berikan training secara online (via Zoom atau sejenisnya) dan tidak kami batasi frekuensi pelaksanaannya (sampai bisa).
                      </div>
                  </div>
              </div>
              <div class="accordion-item mb-4">
                  <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Bagaimana kalau kami mengalami kesulitan saat pemakaian software ?
                      </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Kami sediakan channel khusus untuk support ke pelanggan kami, yakni no.whatsapp khusus yg responsif dan cepat melayani keluhan Anda.<br>Selain itu kami juga sediakan banyak video-video tutorial singkat tapi jelas, serta e-book PDF yg bisa didownload (dan dicetak sendiri), serta blog yg cukup lengkap isinya.
                      </div>
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
                  <a target="_blank" href="https://play.google.com/store/apps/details?id=id.iconix.mobile"
                      class="nav-link p-0 text-white">
                      <img src="{{ asset('images/landingpage/play-store.webp') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" width="180px" />
                  </a>
              </div>
          </div>
          <p data-aos="fade-down" data-aos-duration="600">* Khusus Klinik Kecantikan</p>
      </div>
      <div class="col-lg-4 d-flex align-items-end justify-content-end">
          <img src="{{ asset('images/landingpage/cta-download-app.png') }}" alt="Software Klinik Kecantikan, Beauty Clinic, Aesthetic Clinic" class="img-fluid d-none d-lg-block"
              style="max-height: 350px;" data-aos="zoom-in-up" data-aos-duration="600">
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