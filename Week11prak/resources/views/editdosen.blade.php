@extends('layout.main')
@section('title','Edit dosen')
@section('content')
<div class="col-lg-10">
    <div class="container-fluid mt-4 rounded">
        @php
        $pakar = explode(',' ,$dosen->pakar);
        @endphp
        <form action="/dosen/updatedosen/{{ $dosen->id }}" method="post" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label for=""></label>
                <input type="number" name="nidn" id="" class="form-control" value="{{ $dosen->nidn}}" readonly>
            </div>
            <div class="form-group w-25">
                <label for=""></label>
                <input type="text" name="nama" id="" class="form-control" value="{{$dosen->nama}}" required>
            </div>
            <label>status</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="Dosen tetap" {{ $dosen->status == "Dosen tetap" ? 'checked' :''}} class="form-check-input" >
                <label>Dosen tetap</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="Dosen tidak tetap" {{ $dosen->status == 'Dosen tidak tetap' ? 'checked' :''}} class="form-check-input" >
                <label>Dosen tidak tetap</label>
            </div>
            <div class="form-group">
                <label>jafung</label>
                <select name="jafung" class="form-control">
                    <option value="Dekan" {{$dosen->jafung == 'Dekan' ? 'selected' :''}} >-Dekan-</option>
                    <option value="Wakil Dekan" {{$dosen->jafung == 'Wakil Dekan' ? 'selected' :''}} >-Wakil Dekan-</option>
                    <option value="Kaprodi" {{$dosen->jafung == 'Kaprodi' ? 'selected' :''}} >-Kaprodi-</option>
                    <option value="Kepala Biro" {{$dosen->jafung == 'Kepala Biro' ? 'selected' :''}} >-Kepala Biro-</option>
                </select>
            </div>
            <label>pakar</label>
            <div class="form-check w-25">   
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Matematika" {{ in_array('Matematika',$pakar) ? 'checked':''}}>
                <label>Matematika</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="B.Inggris" {{ in_array('B.Inggris',$pakar) ? 'checked':''}}>
                <label>B.Inggris</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Programming" {{ in_array('Programming',$pakar) ? 'checked':''}}>
                <label>Programming</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" class="form-check-input" name="pakar[]" value="Komunikasi" {{ in_array('Komunikasi',$pakar) ? 'checked':''}}>
                <label>Komunikasi</label>
                <div class="form-group pt-4">
                    <label for=""></label>
                    <input type="submit" value="simpan" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection