@extends('admin.index')
@section('content')
@if(Auth::user()->role == 'admin')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Management Metode Pembayaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Management Metode Pembayaran</li>
        </ol>
        <div class="mb-1">
            <a href="{{ route('metodebayar.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Management Metode Pembayaran
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>No.Rek</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($ar_bayar as $datax)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $datax->kode }}</td>
                            <td>{{ $datax->pembayaran }}</td>
                            @if($datax->tipe == 'bank')
                            <td>Bank</td>
                            @else
                            <td>E-Wallet</td>
                            @endif
                            <td>{{ $datax->norek }}</td>
                            @if($datax->status == 'aktif')
                            <td><span style="color: green;">Aktif</span></td>
                            @else
                            <td><span style="color: red;">Nonaktif</span></td>
                            @endif
                            <td class="text-center">
                                <form method="POST" action="{{ route('metodebayar.destroy', $datax->idbayar) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('metodebayar.edit', $datax->idbayar) }}" class="btn btn-warning btn-sm me-1" title="Edit"><span class="fa fa-pen"></span></a>
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
@else
@include('admin.access_denied')
@endif
@endsection