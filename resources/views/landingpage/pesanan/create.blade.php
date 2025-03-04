@extends('landingpage.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pesanan</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="produk" class="form-label text-dark">Produk Software</label>
                        <select name="produk" id="produk" class="form-select">
                        @foreach($ar_produk as $datax)
                        <option value="{{ $datax->idproduk }}" data-harga="{{ $datax->harga }}">{{ $datax->namaproduk }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lamapakai" class="form-label text-dark">Lama Pakai</label>
                        <select name="lamapakai" id="lamapakai" class="form-select">
                            <option value="1">1 Bulan</option>
                            <option value="3">3 Bulan</option>
                            <option value="6">6 Bulan</option>
                            <option value="12">12 Bulan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="total" class="form-label text-dark">Harga Total</label>
                        <input type="text" class="form-control" id="total" name="total" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="namapemesan" class="form-label text-dark">Nama Pemesan</label>
                        <input type="text" class="form-control" id="namapemesan" name="namapemesan" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailpemesan" class="form-label text-dark">Email Pemesan</label>
                        <input type="email" class="form-control" id="emailpemesan" name="emailpemesan" required>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label text-dark">No Handphone</label>
                        <input type="number" class="form-control" id="nohp" name="nohp" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaklinik" class="form-label text-dark">Nama Klinik</label>
                        <input type="text" class="form-control" id="namaklinik" name="namaklinik" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label text-dark">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="metodebayar" class="form-label text-dark">Metode Pembayaran</label>
                        <select name="metodebayar" id="metodebayar" class="form-select">
                        @foreach($ar_bayar as $datax)
                            <option value="{{ $datax->idbayar }}">{{ $datax->pembayaran }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="domain" class="form-label text-dark">Sub Domain</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="namadomain" placeholder="Nama Klinik (tanpa spasi atau tanda baca, misal: smilebeauty)">
                            <div class="input-group-append">
                                <select name="domain" id="domain" class="form-select">
                                    <option value=".clinics.id">clinics.id</option>
                                    <option value=".clinic.co.id">clinic.co.id</option>
                                    <option value=".beautyclinic.app">beautyclinic.app</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="belum">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-primary btn-pesanan">Order</button>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>

    </div>
</main>
<br><hr>
@endsection