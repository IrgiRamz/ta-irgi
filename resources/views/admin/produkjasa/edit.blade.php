@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produkjasa.index') }}">Management Produk</a></li>
            <li class="breadcrumb-item active">Edit Produk</li>
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
                <form method="POST" action="{{ route('produkjasa.update', $row->idproduk) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="namaproduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="{{ $row->namaproduk }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $row->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="kecantikan" {{ $row->kategori == 'kecantikan' ? 'selected' : '' }}>Kecantikan</option>
                            <option value="kesehatan" {{ $row->kategori == 'kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            <option value="gigi" {{ $row->kategori == 'gigi' ? 'selected' : '' }}>Gigi</option>
                            <option value="lain" {{ $row->kategori == 'lain' ? 'selected' : '' }}>Lain-Lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="aktif" {{ $row->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="nonaktif" {{ $row->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>
                    <input type="hidden" name="kategorilast" value="{{ $row->kategori }}">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-warning">Edit</button>
                    <a href="{{ route('produkjasa.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection