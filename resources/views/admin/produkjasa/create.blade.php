@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produkjasa.index') }}">Management Produk</a></li>
            <li class="breadcrumb-item active">Tambah Produk</li>
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
                <form method="POST" action="{{ route('produkjasa.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaproduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaproduk" name="namaproduk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="kecantikan">Kecantikan</option>
                            <option value="kesehatan">Kesehatan</option>
                            <option value="gigi">Gigi</option>
                            <option value="lain">Lain-Lain</option>
                        </select>
                    </div>
                    <input type="hidden" name="status" value="aktif">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('produkjasa.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection