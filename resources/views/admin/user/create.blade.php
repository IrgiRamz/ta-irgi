@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah User Baru</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kelolausers.index') }}">Management User</a></li>
            <li class="breadcrumb-item active">Tambah User Baru</li>
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
                <!-- Form untuk input data user baru -->
                <form method="POST" action="{{ route('kelolausers.store') }}">
                    @csrf
                    <!-- Input fields untuk data user sesuai dengan model User -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <input type="hidden" name="status" value="aktif">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="admin">Admin</option>
                            <option value="finance">Finance</option>
                            <option value="support">Support</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection