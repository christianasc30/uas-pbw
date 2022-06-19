@extends('layout.main')
@section('title','user')
@section('content')
<div class="col-lg-10 vb-100">
    <div class="card mt-4">
        <div class="card-header" style="background-color:#BBB5BD ;">
            <a name="" id="" class="btn" href="/user/formuliruser" role="button" style="background-color:#CDD3CE ;"><i class="bi bi-person-plus"></i> Tambah user</a>
            <form class="form-inline my-2 my-lg-0 float-right" style="background-color:#CDD3CE ;" method="GET" action="/user/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">Search</button>
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
        
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Handphone</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $no => $us)

                    <tr>
                        <th scope="row">{{$user->firstItem() + $no}}</th>
                        <td> {{ $us->nik_user }}</td>
                        <td> {{ $us->nama_user }}</td>  
                        <td> {{ $us->no_hp }}</td>
                        <td> 
                            <a href="/user/edituser/{{ $us-> id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="/user/hapususer/{{ $us-> id}}" class="btn btn-danger"><i class="bi bi-trash" onclick="return confirm('Anda Yakin ingin menghapus data ini?')"></i></i></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
            <span class="float-right">
                {{ $user -> links() }}
            </span>

        </div>
    </div>
    @endsection