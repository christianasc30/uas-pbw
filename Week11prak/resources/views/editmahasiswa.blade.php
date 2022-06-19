@extends('layout.main')
@section('title','Edit Mahasiswa')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        @php
        $bidang_minat = explode(',' ,$mahasiswa->bidang_minat);
        @endphp
        <form action="/mahasiswa/updatemahasiswa/{{ $mahasiswa->id }}" method="post" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label for=""></label>
                <input type="number" name="nim" id="" class="form-control" value="{{ $mahasiswa->nim}}" readonly>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="nama" id="" class="form-control" value="{{$mahasiswa->nama}}" required>
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" value="Laki-laki" {{ $mahasiswa->gender == "Laki-laki" ? 'checked' :''}} class="form-check-input" >
                <label>Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" value="Perempuan" {{ $mahasiswa->gender == 'Perempuan' ? 'checked' :''}} class="form-check-input" >
                <label>Perempuan</label>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi" {{$mahasiswa->jurusan == 'Sistem Informasi' ? 'selected' :''}} >-Sistem Informasi-</option>
                    <option value="Teknologi Informatika" {{$mahasiswa->jurusan == 'Teknologi Informatika' ? 'selected' :''}} >-Teknologi Informatika-</option>
                    <option value="Arsitektur" {{$mahasiswa->jurusan == 'Arsitektur' ? 'selected' :''}} >-Arsitektur-</option>
                    <option value="Kedokteran" {{$mahasiswa->jurusan == 'Kedokteran' ? 'selected' :''}} >-Kedokteran-</option>
                </select>
            </div>
            <label>Bidang Minat</label>
            <div class="form-check w-25">   
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Coding" {{ in_array('Coding',$bidang_minat) ? 'checked':''}}>
                <label>Coding</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Gaming" {{ in_array('Gaming',$bidang_minat) ? 'checked':''}}>
                <label>Gaming</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Merepotkan orang tua" {{ in_array('Merepotkan orang tua',$bidang_minat) ? 'checked':''}}>
                <label>Merepotkan orang tua</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="bidang_minat[]" value="Tidur" {{ in_array('Tidur',$bidang_minat) ? 'checked':''}}>
                <label>Tidur</label>
                <div class="form-group pt-4">
                    <label for=""></label>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection