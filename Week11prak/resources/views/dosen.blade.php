@extends('layout.main')
@section('title','Dosen')
@section('content')
<div class="col-lg-10 vb-100">
    <div class="card mt-4">
        <div class="card-header" style="background-color:#BBB5BD ;">
            <a name="" id="" class="btn" href="/dosen/formulirdosen" role="button" style="background-color: #CDD3CE"><i class="bi bi-person-plus"></i> Tambah Dosen</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  my-2 my-sm-0" type="submit" style="background-color: #CDD3CE">Search</button>
            </form>
        </div>

        <div class="card-body" style="background-color:#BBB5BD ;">
        @if (session('alertsimpan'))
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        <strong>{{session('alertsimpan') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden-"true">&times;</span>
        </button>
        </div>
        @elseif (session('alertupdate'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{session('alertupdate') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden-"true">&times;</span>
        </button>
        </div>
        @elseif (session('alertdelete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('alertdelete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden-"true">&times;</span>
        </button>
        </div>
        @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nidn</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jabatan Fungsional</th>
                        <th scope="col">Keahlian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $no => $d)

                    <tr>
                        <th scope="row">{{$dosen->firstItem() + $no}}</th>
                        <td> {{ $d->nidn }}</td>
                        <td> {{ $d->nama }}</td>
                        <td> {{ $d->status }}</td>
                        <td> {{ $d->jafung }}</td>
                        <td> {{ $d->pakar }}</td>
                        <td>
                        <a href="/dosen/editdosen/{{ $d-> id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="/dosen/hapusdosen/{{ $d-> id}}" class="btn btn-danger"><i class="bi bi-trash" onclick="return confirm('Anda Yakin ingin menghapus data ini?')"></i></i></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
            <span class="float-right">
                {{ $dosen -> links() }}
            </span>

        </div>
    </div>
</div>
@endsection