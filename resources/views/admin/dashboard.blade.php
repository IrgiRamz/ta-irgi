@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                            </div>
                            <div class="text-left">
                                <h5 class="card-title">Total Order</h5>
                                <p class="card-text">{{ $totalOrders }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <i class="fas fa-boxes fa-2x"></i>
                            </div>
                            <div class="text-left">
                                <h5 class="card-title">Total Produk</h5>
                                <p class="card-text">{{ $totalProducts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <i class="fas fa-hand-holding-usd fa-2x"></i>
                            </div>
                            <div class="text-left">
                                <h5 class="card-title">Total Pendapatan</h5>
                                <p class="card-text">Rp. {{ number_format($totalRevenue, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <div class="text-left">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text">{{ $totalUsers }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</main>
@endsection