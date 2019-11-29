@extends('layout/main')
@section('title', 'Detail Mahasiswa')


@section('container')
<div class="container">
	<div class="row">
		<div class="col-md-6">
        	<h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card bg-primary">
            <div class="card col-md-11">
            <div class=" card-body">
        		<div class="form-group">
        			<label>Nama : </label><label>&nbsp{{ $mahasiswa->nama }}</label>
        		</div>
        		<div class="form-group">
        			<label>NRP : </label><label>&nbsp{{ $mahasiswa->nrp }}</label>
        		</div>
        		<div class="form-group">
        			<label>Email : </label><label>&nbsp{{ $mahasiswa->email }}</label>
        		</div>
        		<div class="form-group">
        			<label>Alamat : </label><label>&nbsp{{ $mahasiswa->jurusan }}</label>
        		</div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection