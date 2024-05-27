@extends('layouts.app')

@section('title', 'Data Konsultasi')

@section('content')

<div class="container">
    <a href="/dashboards/konsultasi" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('konsultasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">descriptionlengkap</label>
                    <textarea name="descriptionlengkap" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsilengkap"></textarea>
                </div>
                @error('descriptionlengkap')
                <small style="color:red">{{$message}}</small>
                @enderror
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
