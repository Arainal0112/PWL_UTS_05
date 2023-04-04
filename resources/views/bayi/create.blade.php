@extends('bayi.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data Bayi
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('bayi.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="no_urut">No Urut</label>
                        <input type="text" name="no_urut" class="form-control" id="no_urut"
                            ariadescribedby="no_urut">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama"
                            ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat"
                            ariadescribedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
                             ariadescribedby="tgl_lahir" value="2001-01-01">
                    </div>
                    <div class="form-group">
                        <label for="bb_lahir">Berat</label>
                        <input type="number" name="bb_lahir" class="form-control" id="bb_lahir"
                            ariadescribedby="berat">
                    </div>
                    <div class="form-group">
                        <label for="tb_lahir">Tinggi</label>
                        <input type="number" name="tb_lahir" class="form-control" id="tb_lahir"
                             aria-describedby="tb_lahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
