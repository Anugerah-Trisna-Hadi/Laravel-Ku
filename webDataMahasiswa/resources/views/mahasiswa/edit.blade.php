@extends('layout/main')
@section('title', 'Edit Mahasiswa')


@section('container')
<div class="container">
	<div class="row">
		<div class="col-md-6">
        	<h1 class="mt-3">Edit Mahasiswa</h1>
        	<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="post" class="form-group">

        		{{ csrf_field() }}
                {{ method_field('PUT') }}
        		<div class="form-group">
        			<label>Nama</label>
        			<input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}">
        		</div>
                @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>NRP</label>
        			<input type="text" name="nrp" id="nrp" class="form-control" value="{{ $mahasiswa->nrp }}">
        		</div>
                @if($errors->has('nrp'))
                    <div class="text-danger">
                        {{ $errors->first('nrp')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>Email</label>
        			<input type="text" name="email" id="email" class="form-control" value="{{ $mahasiswa->email }}">
        		</div>
                @if($errors->has('email'))
                    <div class="text-danger">
                        {{ $errors->first('email')}}
                    </div>
                @endif
        		<div class="form-group">
        			<label>Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}">
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