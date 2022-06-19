@extends('layout.main')
@section('title','Home')
@section('content')
<h3>Selamat Datang {{Auth::user()->nama_user ?? ''}}💕</h3>
@endsection