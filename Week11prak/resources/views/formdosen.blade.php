@extends('layout.main')
@section('title','Formulir Mahasiswa')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        <form action="/dosen/simpandosen" method="post" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label for=""></label>
                <input type="number" name="nidn" id="" class="form-control" placeholder="Masukkan nidn" required>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <label>status</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="Dosen tetap" class="form-check-input">
                <label>Dosen tetap</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="Dosen tidak tetap" class="form-check-input">
                <label>Dosen tidak tetap</label>
            </div>
            <div class="form-group">
                <label>jafung</label>
                <select name="jafung" class="form-control">
                    <option value="Dekan">-Dekan-</option>
                    <option value="Wakil Dekan">-Wakil Dekan-</option>
                    <option value="Kaprodi">-Kaprodi-</option>
                    <option value="Kepala Biro">-Kepala Biro-</option>
                </select>
            </div>
            <label>pakar</label>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Matematika">
                <label>Matematika</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="B.Inggris">
                <label>B.Inggris</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Programming">
                <label>Programming</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Komunikasi">
                <label>Komunikasi</label>
            </div>
                <div class="form-group pt-4">
                    <label for=""></label>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection
