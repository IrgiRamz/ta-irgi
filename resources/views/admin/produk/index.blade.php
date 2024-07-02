@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Management Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Management Produk</li>
        </ol>
        <div class="mb-1">
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Management Produk
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>CTK-24001</td>
                            <td>Software Klinik Kecantikan (Premium)</td>
                            <td>Rp. 575.000</td>
                            <td><span style="color: green;">Aktif</span></td>
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