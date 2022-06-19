@extends('layout.main')
@section('title','Formulir Mahasiswa')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmhs" method="post" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label for=""></label>
                <input type="number" name="nim" id="" class="form-control" placeholder="Masukkan NIM" required>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" value="Laki-laki" class="form-check-input">
                <label>Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" value="Perempuan" class="form-check-input">
                <label>Perempuan</label>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi">-Sistem Informasi-</option>
                    <option value="Teknologi Informatika">-Teknologi Informatika-</option>
                    <option value="Kedokteran">-Kedokteran-</option>
                    <option value="Arsitektur">-Arsitektur-</option>
                </select>
            </div>
            <label>Bidang Minat</label>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Coding">
                <label>Coding</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Gaming">
                <label>Gaming</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Merepotkan orang tua">
                <label>Merepotkan orang tua</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Tidur">
                <label>Tidur</label>
            </div>
                <div class="form-group pt-4">
                    <label for=""></label>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection
