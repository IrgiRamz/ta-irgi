@extends('admin.index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Management Chatbot</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Management Chatbot</li>
        </ol>
        <div class="mb-1">
            <a href="{{ route('setchatbot.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Management Chatbot
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Status</th>
                            <th>Pembuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($ar_tanya as $datax)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $datax->pertanyaan }}</td>
                            <td>{{ $datax->jawaban }}</td>
                            @if($datax->status == 'aktif')
                            <td><span style="color: green;">Aktif</span></td>
                            @else
                            <td><span style="color: red;">Nonaktif</span></td>
                            @endif
                            <td>{{ $datax->user->name }}</td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('setchatbot.destroy', $datax->idpertanyaan) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('setchatbot.edit', $datax->idpertanyaan) }}" class="btn btn-warning btn-sm me-1" title="Edit"><span class="fa fa-pen"></span></a>
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