@extends('layout/main')
@section('title', 'Mahasiswa')


@section('container')
<div class="container">
  <div class="row mt-3">
          <div class="col-md-6">
              <a href="/mahasiswa/tambah" class="btn btn-primary">Tambah
                  Data Mahasiswa</a>
          </div>
      </div>

      <div class="row mt-3">
          <div class="col-md-6">
              <form action="/mahasiswa/search" method="GET">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
                      <div class="input-group-append">
                          <button class="btn btn-primary" type="submit">Cari</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    <div class="row">
      <div class="col-md">
        <h1 class="mt-3">Daftar Mahasiswa</h1>
      
      <table class="table">
      	<thead class="thead-dark">
      		<tr>
      		<th scope="col">#</th>
      		<th scope="col">Nama</th>
      		<th scope="col">NRP</th>
      		<th scope="col">Email</th>
      		<th scope="col">Alamat</th>
      		<th scope="col" colspan="3" class="text-center">Aksi</th>
      		</tr>
      	</thead>
      	<tbody>
          @if(empty($mahasiswa->total()))
          <tr class="bg-danger">
            <td colspan="8" class="text-center"><h4>Ooppss!! Data {{ $search }} Not Available</h4></td>
          </tr>
          @endif
@foreach( $mahasiswa as $mhs )
      		<tr >
      			<th scope="row">{{ $mhs->id }}</th>
      			<td>{{ $mhs->nama }}</td>
      			<td>{{ $mhs->nrp }}</td>
      			<td>{{ $mhs->email }}</td>
      			<td>{{ $mhs->jurusan }}</td>
      			<td>
      				<a href="/mahasiswa/edit/{{ $mhs->id }}" class="badge badge-success">Edit</a>
      			</td>
            <td>
              <a href="/mahasiswa/delete/{{ $mhs->id }}" class="badge badge-danger">Delete</a>
            </td>
            <td>
              <a href="/mahasiswa/show/{{ $mhs->id }}" class="badge badge-warning">Detail</a>
            </td>
      		</tr>
 @endforeach
      	</tbody>
      </table>
      <div class="form-group row mb-0">
      <div class="col-md-6">
      <h4>Halaman : {{ $mahasiswa->currentPage() }}</h4> <br/>
      <h4>Jumlah Data : {{ $mahasiswa->total() }}</h4> <br/>
      <h4>Data Per Halaman : {{ $mahasiswa->perPage() }}</h4>
      </div>
      <div class="col-md-6">
      {{ $mahasiswa->links() }}
      </div>
     </div> 
      </div>
    </div>
  </div>
@endsection