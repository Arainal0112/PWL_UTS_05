@extends('layouts.content')

@section('title', 'Data Bayi')

@section('content')
<x-sidebar home="active" profil=""/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>DATA BAYI</h2>
        </div>
        <div class="float-left my-2">
            <form action="" method="GET" class="d-flex">
                <input type="text" class="form-control" name="nama" placeholder="Nama Bayi" value="" required>
                <button type="submit" class="btn btn-primary">Search</button>

            </form>

        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('bayi.create') }}"> Input BAYI</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No Urut</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Berat</th>
        <th>Tinggi</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($bayi as $Bayi)
    <tr>
        <td>{{ $Bayi->no_urut}}</td>
        <td>{{ $Bayi->nama }}</td>
        <td>{{ $Bayi->alamat }}</td>
        <td>{{ $Bayi->tgl_lahir }}</td>
        <td>{{ $Bayi->bb_lahir }}</td>
        <td>{{ $Bayi->tb_lahir }}</td>
        <td>
            <form action="{{ route('bayi.destroy',$Bayi->no_urut) }}" method="POST">
                <a class="btn btn-info" href="{{ route('bayi.show',$Bayi->no_urut) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('bayi.edit',$Bayi->no_urut) }}">Edit</a>
                @csrf

                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex">
    {{ $bayi->links() }}
</div>
        <!-- /.card -->

    </section>
    @endsection