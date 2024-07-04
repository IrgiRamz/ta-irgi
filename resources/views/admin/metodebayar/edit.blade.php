@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Metode Pembayaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kelolausers.index') }}">Management Metode Pembayaran</a></li>
            <li class="breadcrumb-item active">Edit Metode Pembayaran</li>
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
                <form method="POST" action="{{ route('metodebayar.update', $row->idbayar) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="pembayaran" class="form-label">Nama Pembayaran</label>
                        <input type="text" class="form-control" id="pembayaran" name="pembayaran" value="{{ $row->pembayaran }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="norek" class="form-label">No Rekening/No E-Wallet</label>
                        <input type="number" class="form-control" id="norek" name="norek" value="{{ $row->norek }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipebayar" class="form-label">Kategori Pembayaran</label>
                        <select name="tipebayar" id="tipebayar" class="form-select">
                            <option value="bank" {{ $row->tipe == 'bank' ? 'selected' : '' }}>Bank</option>
                            <option value="ewallet" {{ $row->tipe == 'ewallet' ? 'selected' : '' }}>E-Wallet</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="aktif" {{ $row->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="nonaktif" {{ $row->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>
                    <input type="hidden" name="tipelast" value="{{ $row->tipe }}">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('metodebayar.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection