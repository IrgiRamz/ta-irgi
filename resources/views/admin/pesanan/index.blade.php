@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pemesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Pemesanan</li>
        </ol>
        <div class="mb-1">
        <a href="{{ route('pesanan.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pemesanan
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
                            <th>Status</th>
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
                            @if($datax->status == 'sudah')
                            <td><span style="color: green;">Aktif</span></td>
                            @else
                            <td><span style="color: red;">Nonaktif</span></td>
                            @endif
                            <td class="text-center">
                                <form method="POST" action="{{ route('pesanan.destroy', $datax->idpesanan) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('pesanan.edit', $datax->idpesanan) }}" class="btn btn-info btn-sm me-1" title="Proses"><span class="fa fa-external-link-square"></span></a>
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