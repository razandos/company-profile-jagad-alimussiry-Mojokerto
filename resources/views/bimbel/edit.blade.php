@extends('layouts.app')

@section('title', 'Data bimbel nur aini')

@section('content')

<div class="container">
    <a href="/dashboards/bimbel" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('bimbel.update', $bimbel->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $bimbel->title }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $bimbel->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">descriptionlengkap</label>
                    <textarea name="descriptionlengkap" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsilengkap">{{ $bimbel->descriptionlengkap }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $bimbel->image }}" alt="" class="img-fluid">
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
