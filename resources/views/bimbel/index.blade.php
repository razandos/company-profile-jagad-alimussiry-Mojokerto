@extends('layouts.app')

@section('title', 'Data bimbel nur aini')

@section('content')

<div class="container">
    <a href="/dashboards/bimbel/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Deskripsi Lengkap</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($bimbel as $bimbel)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $bimbel->title }}</td>
                    <td>{{ $bimbel->description }}</td>
                    <td>{{ $bimbel->descriptionlengkap }}</td>
                    <td>
                        <img src="/image/{{ $bimbel->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('bimbel.edit', $bimbel->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bimbel.destroy', $bimbel->id) }}" method="POST">
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