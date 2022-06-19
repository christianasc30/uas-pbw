@extends('layout.main')
@section('title','Formulir user')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        <form action="/user/simpanuser" method="post" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label for=""></label>
                <input type="number" name="nik_user" id="" class="form-control" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="nama_user" id="" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="no_hp" id="" class="form-control" placeholder="Masukkan No Handphone" required>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="password" name="password" id="" class="form-control" placeholder="Masukkan password" required>
            </div>
                <div class="form-group pt-4">
                    <label for=""></label>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection
