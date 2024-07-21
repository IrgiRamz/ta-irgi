@extends('landingpage.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cek Pemesanan</h1>
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
                <form method="POST" action="{{ route('cek.pemesanan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="kodeinvoice" class="form-label text-dark">Kode Invoice</label>
                        <input type="text" class="form-control" id="kodeinvoice" name="kodeinvoice" required>
                    </div>
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-primary btn-pesanan">Cek Pemesanan</button>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>

    </div>
</main>
<br><hr>
@endsection