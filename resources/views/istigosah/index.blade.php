@extends('layouts.app')

@section('title', 'Data Istigosah')

@section('content')

<div class="container">
    <a href="/dashboards/istigosah/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                @foreach ($istigosah as $istigosah)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $istigosah->title }}</td>
                    <td>{{ $istigosah->description }}</td>
                    <td><pre>{{ $istigosah->descriptionlengkap }}</pre></td>
                    <td>
                        <img src="/image/{{ $istigosah->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('istigosah.edit', $istigosah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('istigosah.destroy', $istigosah->id) }}" method="POST">
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