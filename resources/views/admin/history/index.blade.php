@extends('admin.index')
@section('content')
@if(Auth::user()->role == 'admin' || Auth::user()->role == 'finance')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">History Pemesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">History Pemesanan</li>
        </ol>
        <div class="mb-1">
            <!--button type="button" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i></!--button-->
            <!--button type="button" class="btn btn-success btn-sm"><i class="fa fa-file-excel"></i></!--button-->
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                History Pemesanan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Waktu Pesan</th>
                            <th>Produk</th>
                            <th>Total</th>
                            <th>Diverifikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($ar_pesanan as $datax)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $datax->invoice }}</td>
                            <td>{{ $datax->namapemesan }}</td>
                            <td>{{ $datax->waktupesan }}</td>
                            <td>{{ $datax->produk->namaproduk }} ({{ $datax->lamapakai }} Bulan)</td>
                            <td>
                                @php
                                    $harga = $datax->produk->harga;
                                    $lamapakai = $datax->lamapakai;
                                    $totalHarga = ($lamapakai == 12) ? $harga * 10 : $harga * $lamapakai;
                                @endphp
                                Rp.{{ number_format($totalHarga, 0, ',', '.') }}
                            </td>
                            @if($datax->user)
                            <td>{{ $datax->user->name }}</td>
                            @else
                            <td><span style="color: red;">User telah dihapus</span></td>
                            @endif
                            <td class="text-center">
                                <form method="POST" action="{{ route('pesanan.destroy', $datax->idpesanan) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('pesanan.show', $datax->idpesanan) }}" class="btn btn-info btn-sm me-1" title="Detail"><span class="fa fa-eye"></span></a>
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