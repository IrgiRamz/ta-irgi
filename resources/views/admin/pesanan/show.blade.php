@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Pesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pesanan.index') }}">Pemesanan</a></li>
            <li class="breadcrumb-item active">Detail Pesanan</li>
        </ol>

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
                <div class="mb-3">
                    <h5>Produk Software</h5>
                    <p>{{ $row->produk->namaproduk }}</p>
                </div>
                <div class="mb-3">
                    <h5>Lama Pakai</h5>
                    <p>{{ $row->lamapakai }} bulan</p>
                </div>
                <div class="mb-3">
                    <h5>Total Harga</h5>
                    <p>Rp.{{ number_format($row->total, 0, ',', '.') }}</p>
                </div>
                <div class="mb-3">
                    <h5>Nama Pemesan</h5>
                    <p>{{ $row->namapemesan }}</p>
                </div>
                <div class="mb-3">
                    <h5>Email Pemesan</h5>
                    <p>{{ $row->emailpemesan }}</p>
                </div>
                <div class="mb-3">
                    <h5>No Handphone</h5>
                    <p>{{ $row->nohp }}</p>
                </div>
                <div class="mb-3">
                    <h5>Nama Klinik</h5>
                    <p>{{ $row->namaklinik }}</p>
                </div>
                <div class="mb-3">
                    <h5>Alamat</h5>
                    <p>{{ $row->alamat }}</p>
                </div>
                <div class="mb-3">
                    <h5>Metode Pembayaran</h5>
                    <p>{{ $row->metodeBayar->pembayaran }} <br> No rek : {{ $row->metodeBayar->norek }}</p>
                </div>
                <div class="mb-3">
                    <h5>Domain</h5>
                    <p>{{ $row->domain }}</p>
                </div>
                @if($row->status != 'belum')
                <hr>
                <h5 style="color: green;">Sudah Bayar</h5>
                <div class="mb-3">
                    <h5>Bukti</h5>
                    @if ($row->bukti)
                    <img src="{{ asset($row->bukti) }}" alt="Bukti Pembayaran" class="w-25 img-thumbnail">
                    @else
                    <p>Tidak ada bukti pembayaran.</p>
                    @endif
                </div>
                <div class="mb-3">
                    <h5>Catatan</h5>
                    <p>{{ $row->catatan }}</p>
                </div>
                @endif
                @if($row->status == 'verif')
                <hr>
                <div class="mb-3">
                    <h5>Diverifikasi oleh:</h5>
                    <p>{{ $row->user->name }}</p>
                </div>
                @endif

                <form method="POST" action="{{ route('pesanan.update', $row->idpesanan) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="verif">
                    <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
                    @if($row->status != 'verif')
                    <button type="submit" class="btn btn-success">Verifikasi</button>
                    @endif
                    {{--<a href="{{ route('pesanan.index') }}" class="btn btn-danger">Kembali</a> --}}
                    <button type="button" class="btn btn-danger" id="btn-keluar">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection