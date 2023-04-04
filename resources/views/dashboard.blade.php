@extends('bayi.layout')

@section('title', 'Home')

@section('content')
<div class="content">
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
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <h1 id="selamatdatang">Selamat Datang, {{$user->name}}</h1>
                </div>
                <h3>Profil</h3>
                <div class="row mt-4">
                
                   <table>
                        <tr><th>Username</th><th>:</th><td>{{$user->username}}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{$user->name}}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{$user->email}}</td></tr>
                        
                    </table>
                    
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        

    </section>
    @endsection