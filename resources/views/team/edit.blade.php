@extends('layouts.app')

@section('title', 'Data Team')

@section('content')

<div class="container">
    <a href="/dashboards/teams" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama" value="{{ $team->title }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Jabatan">{{ $team->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror


                <img src="/image/{{ $team->image }}" alt="" class="img-fluid">
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
