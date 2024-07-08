@extends('landingpage.index')


@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Pemesanan</h1>
        <div class="card mb-4">
            <div class="card-body text-dark">
                <h5 class="card-title">Detail Pemesanan</h5>
                <p>Invoice: {{ $pesanan->invoice }}</p>
                <p>Nama Pemesan: {{ $pesanan->namapemesan }}</p>
                <p>Email Pemesan: {{ $pesanan->emailpemesan }}</p>
                <p>No Handphone: {{ $pesanan->nohp }}</p>
                <p>Nama Klinik: {{ $pesanan->namaklinik }}</p>
                <p>Lama Pakai: {{ $pesanan->lamapakai }} Bulan</p>
                <p>Total Harga: Rp. {{ number_format($pesanan->total, 0, ',', '.') }}</p>
                <p>Alamat: {{ $pesanan->alamat }}</p>
                <p>Domain: {{ $pesanan->domain }}</p>
                <p>Metode Pembayaran: {{ $pesanan->metodebayar->pembayaran }}</p>
            </div>
        </div>
        @if($pesanan->status == "belum")
        <h1 class="mt-4">Lakukan Proses Pembayaran</h1>
        <div class="card mb-4">
            <div class="card-body text-dark">
                <p>Total Harga: Rp. {{ number_format($pesanan->total, 0, ',', '.') }}</p>
                <p>Metode Pembayaran: {{ $pesanan->metodebayar->pembayaran }}</p>
                <p>Norek: {{ $pesanan->metodeBayar->norek }}</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body text-dark">
                <form method="POST" action="{{ route('pesanan.konfirmasi', $pesanan->idpesanan) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
        @else
        <h1 class="mt-4">Bukti Pembayaran Telah Diterima</h1>
        <div class="card mb-4">
            <div class="card-body text-dark">
                <p>Total Harga: Rp. {{ number_format($pesanan->total, 0, ',', '.') }}</p>
                <p>Metode Pembayaran: {{ $pesanan->metodebayar->pembayaran }}</p>
                <p style="color: green;">Berhasil Dikirim</p>
                <p><span style="color: red;">*</span> Tunggu Beberapa saat maka kami akan mengirimkan mu konfirmasi ke kontak mu terkait pengaktifan produk</p>
            </div>
        </div>
        <a href="{{ route('home.index') }}" class="btn btn-warning">Kembali ke Home</a>
        @endif
    </div> <br><hr>
</main>


@endsection