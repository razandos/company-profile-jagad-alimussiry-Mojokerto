@extends('layouts.app')

@section('title', 'Data jamedia')

@section('content')

<div class="container">
    <a href="/dashboards/jamedia/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                @php
                    $i = 1
                @endphp
                @foreach ($jamedia as $jamedia)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $jamedia->title }}</td>
                    <td>{{ $jamedia->description }}</td>
                    <td>
                        <img src="/image/{{ $jamedia->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('jamedia.edit', $jamedia->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jamedia.destroy', $jamedia->id) }}" method="POST">
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