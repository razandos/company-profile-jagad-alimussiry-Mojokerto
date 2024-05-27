@extends('layouts.app')

@section('title', 'Data Koperasi')

@section('content')

<div class="container">
    <a href="/dashboards/koperasi" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('koperasi.update', $koperasi->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $koperasi->title }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $koperasi->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">descriptionlengkap</label>
                    <textarea name="descriptionlengkap" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsilengkap">{{ $koperasi->descriptionlengkap }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $koperasi->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
