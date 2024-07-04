@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Management User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Management User</li>
        </ol>
        <div class="mb-1">
            <a href="{{ route('kelolausers.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Management User
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($ar_users as $datax)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $datax->kodeuser }}</td>
                            <td>{{ $datax->name }}</td>
                            <td>{{ $datax->role }}</td>
                            @if($datax->status == 'aktif')
                            <td><span style="color: green;">Aktif</span></td>
                            @else
                            <td><span style="color: red;">Tidak Aktif</span></td>
                            @endif
                            <td class="text-center">
                                <form method="POST" action="{{ route('kelolausers.destroy', $datax->id) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('kelolausers.edit', $datax->id) }}" class="btn btn-warning btn-sm me-1" title="Edit"><span class="fa fa-pen"></span></a>
                                    <button type="submit" class="btn btn-danger btn-sm delete-confirm" title="Hapus"><span class="fa fa-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                        @php $no++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection