@extends('layouts.app')

@section('title', 'Data berita ')

@section('content')

<div class="container">
    <a href="/dashboards/event/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Tanggal dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($event as $event)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>
                        <img src="/image/{{ $event->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>{{ $event->event_date }}</td>
                    <td>
                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('event.destroy', $event->id) }}" method="POST">
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