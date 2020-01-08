@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row"> 
			<div class="col-6">
				<h2>inventaris</h2>
			</div>
			<div class="col-6">
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			 Tambah inventaris 
			</button>

			</div>

			</div>
 <table class="table table-hover">
 	<tr>
 		<th>No</th>
 		
 		<th>ID inventaris</th>
 		<th>Nama</th>
 		<th>kondisi</th>
 		<th>Keterangan</th>
 		<th>Jumlah</th>
 		<th>ID Jenis</th>
 		<th>Tanggal Register</th>
 		<th>ID Ruang</th>
 		<th>Kode Inventaris</th>
 		<th>ID Petugas</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($data_inventaris as $inventaris)
 	<tr>
 		<td>{{$loop->iteration}}</td>		
 		<td>{{$inventaris->id_inventaris}}</td>
 		<td>{{$inventaris->nama}}</td>
 		<td>{{$inventaris->kondisi}}</td>
 		<td>{{$inventaris->keterangan}}</td>
 		<td>{{$inventaris->jumlah}}</td>
 		<td>{{$inventaris->id_jenis}}</td>
 		<td>{{$inventaris->tanggal_register}}</td>
 		<td>{{$inventaris->id_ruang}}</td>
 		<td>{{$inventaris->kode_inventaris}}</td>
 		<td>{{$inventaris->id_petugas}}</td>
 		
 		<td>
 			<a href="/inventaris/{{$inventaris->id_inventaris}}/edit" class="btn btn-warning btn-sm">Edit</a>
 			<a href="/inventaris/{{$inventaris->id_inventaris}}/delete" class="btn btn-danger" onclick="return confirm('Anda ingin menghapus data ini ?')">Delete</a>
 		</td>
 	</tr>
 	@endforeach
	</div>
</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
		<form action="/inventaris" method="POST">
			{{csrf_field()}} 

			    
					

			    <div class="form-group">
			    <label for="exampleInputEmail1">ID inventaris</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID inventaris"name="id_inventaris">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama inventaris"name="nama">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Kondisi</label>
			    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kondisi" name="kondisi">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Keterangan</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" name="keterangan">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumalh"name="jumlah">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID jenis</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id_jenis"name="id_jenis">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal</label>
			    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal Register"name="tanggal_register">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID Ruang</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Ruang"name="id_ruang">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Kode Inventaris</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Inventaris"name="kode_inventaris">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID Petugas</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Petugas"name="id_petugas">
			     </div>


			  
				 </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div> 
			  </form>
			</div>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
