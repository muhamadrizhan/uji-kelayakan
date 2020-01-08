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
				<h2>jenis</h2>
			</div>
			<div class="col-6">
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			 Tambah jenis 
			</button>

			</div>

			</div>
 <table class="table table-hover">
 	<tr>
 		<th>No</th>
 		
 		<th>ID Jenis</th>
 		<th>Nama </th>
 		<th>Kode</th>
 		<th>Keterangan</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($data_jenis as $jenis)
 	<tr>
 		<td>{{$loop->iteration}}</td>		
 		<td>{{$jenis->id_jenis}}</td>
 		<td>{{$jenis->nama_jenis}}</td>
 		<td>{{$jenis->kode_jenis}}</td>
 		<td>{{$jenis->keterangan}}</td>
 		
 		<td>
 			<a href="/jenis/{{$jenis->id_jenis}}/edit" class="btn btn-warning btn-sm">Edit</a>
 			<a href="/jenis/{{$jenis->id_jenis}}/delete" class="btn btn-danger" onclick="return confirm('Anda ingin menghapus data ini ?')">Delete</a>
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
		<form action="/jenis" method="POST">
			{{csrf_field()}} 

			    
					

			    <div class="form-group">
			    <label for="exampleInputEmail1">ID Jenis</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID jenis"name="id_jenis">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Nama </label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Jenis"name="nama_jenis">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Kode</label>
			    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Jenis" name="kode_jenis">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Keterangan</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" name="keterangan">
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
