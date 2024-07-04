@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kelolausers.index') }}">Management User</a></li>
            <li class="breadcrumb-item active">Edit User</li>
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
                <form method="POST" action="{{ route('kelolausers.update', $row->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $row->name }}" required>
                        <input type="hidden" name="status" value="aktif">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $row->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" value="{{ $row->telepon }}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="admin" {{ $row->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="finance" {{ $row->role == 'finance' ? 'selected' : '' }}>Finance</option>
                            <option value="support" {{ $row->role == 'support' ? 'selected' : '' }}>Support</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="aktif" {{ $row->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="nonaktif" {{ $row->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Ubah Password (<i>Optional</i>)</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                    </div>
                    <input type="hidden" name="rolelast" value="{{ $row->role }}">
                    <input type="hidden" name="kodeuser" value="{{ $row->kodeuser }}">
                    <!-- Button Aksi -->
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('kelolausers.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection