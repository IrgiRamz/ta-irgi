@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Chatbot Baru</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('setchatbot.index') }}">Management Chatbot</a></li>
            <li class="breadcrumb-item active">Tambah Data Chatbot Baru</li>
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
                <form method="POST" action="{{ route('setchatbot.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pertanyaan" id="pertanyaan" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jawaban" id="jawaban" required></textarea>
                    </div>
                    <input type="hidden" name="status" value="aktif">
                    <input type="hidden" name="pembuat" value="{{ Auth::user()->id }}">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('setchatbot.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection