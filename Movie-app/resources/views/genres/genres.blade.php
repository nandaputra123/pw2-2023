@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Genres Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
        <a href="/genres/create">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}

    </div>
    
@endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genres Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($genres as $genres)
                    <tr>
                        <td>{{ $genres['no']}}</td>
                        <td>{{ $genres['nama']}}</td>
                        <td>{{ $genres['deskripsi']}}</td>
                        <td>
                            <form action="/genres/{{ $genres->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <button class="btn btn-sm btn-danger" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"type="submit">Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more rows for other genres -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
