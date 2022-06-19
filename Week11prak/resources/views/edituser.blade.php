@extends('layout.main')
@section('title','Edit user')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        <form action="/user/updateuser/{{ $user->id }}" method="post" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label for="">NIK</label>
                <input type="text" name="nik_user" id="" class="form-control" value="{{ $user->nik_user}}" required>
            </div>
            <div class="form-group w-25">
                <label for="">Nama Pengguna</label>
                <input type="text" name="nama_user" id="" class="form-control" value="{{$user->nama_user}}" required>
            </div>
            <div class="form-group w-25">
                <label for="">No Handphone</label>
                <input type="text" name="no_hp" id="" class="form-control" value="{{ $user->no_hp}}" required>
            </div>
            <div class="form-group pt-4">
                <label for=""></label>
                <input type="submit" value="simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection