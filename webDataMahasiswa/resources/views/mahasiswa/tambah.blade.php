@extends('layout/main')
@section('title', 'Tambah Mahasiswa')


@section('container')
<div class="container">
	<div class="row">
		<div class="col-md-6">
        	<h1 class="mt-3">Daftar Mahasiswa</h1>
        	<form action="/mahasiswa/store" method="post" class="form-group">
        		{{ csrf_field() }}
        		<div class="form-group">
        			<label>Nama</label>
        			<input type="text" name="nama" id="nama" class="form-control">
        		</div>
                @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>NRP</label>
        			<input type="text" name="nrp" id="nrp" class="form-control">
        		</div>
                @if($errors->has('nrp'))
                    <div class="text-danger">
                        {{ $errors->first('nrp')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>Email</label>
        			<input type="text" name="email" id="email" class="form-control">
        		</div>
                @if($errors->has('email'))
                    <div class="text-danger">
                        {{ $errors->first('email')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>Jurusan</label>
        			<input type="text" name="jurusan" id="jurusan" class="form-control">
        		</div>
                @if($errors->has('jurusan'))
                    <div class="text-danger">
                        {{ $errors->first('jurusan')}}
                    </div>
                @endif
        		<input type="submit" name="simpan" class="btn btn-primary float-right" value="Simpan">
        	</form>
        </div>
    </div>
</div>
@endsection