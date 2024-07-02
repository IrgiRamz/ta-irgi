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
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
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
                            <th>Detail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>INV240622001</td>
                            <td>Andi</td>
                            <td>2024-06-28</td>
                            <td>Software Klinik Kecantikan (Premium) [1 Bulan]</td>
                            <td>Rp. 575.000</td>
                            <td><span style="color: red;">Belum Bayar</span></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary btn-sm me-1"><span class="fa fa-eye"></span></button>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm me-1"><span class="fa fa-pen"></span></button>
                                <button type="button" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection