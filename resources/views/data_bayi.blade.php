@extends('layouts.content')

@section('title', 'Home')

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
                <button type="submit" class="btn btn-outline-primary">Search</button>

            </form>

        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href=""> Input BAYI</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>

<th>Nim</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>E-mail</th>
        <th>No Handphone</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($bayi as $Bayi)
    <tr>
        <td>{{ $Bayi->no_ }}</td>
        <td>{{ $Bayi->nama }}</td>
        <td>
            <form action="{{ route('bayi.destroy',$Bayi->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('bayi.show',$Bayi->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('bayi.edit',$Bayi->nim) }}">Edit</a>
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