@extends('layouts.content')

@section('title', 'Data Bayi')

@section('content')
<x-sidebar home="active" profil=""/>
<!-- Content Wrapper. Contains page content -->
<section class="content">
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Bayi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No Urut: </b>{{$bayi->no_urut}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$bayi->nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$bayi->tgl_lahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$bayi->alamat}}</li>
                    <li class="list-group-item"><b>Berat: </b>{{$bayi->bb_lahir}}</li>
                    <li class="list-group-item"><b>Tinggi: </b>{{$bayi->tb_lahir}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('bayi.index') }}">Kembali</a>
        </div>
    </div>
</div>
</section>
@endsection
