@extends('layouts.app')

@section('title', 'Data Ruang media guru')

@section('content')

<div class="container">
    <a href="/dashboards/guru/create" class="btn btn-primary mb-1">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $guru)
                <tr>
                   
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guru->title }}</td>
                    <td>{{ $guru->description }}</td>
                    <td>
                        <img src="/image/{{ $guru->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>      
</div>

@endsection