@extends('layouts.app')

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1>Edit Data petugas</h1>
		@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row"> 
			<div class="col-lg-12">
			<form action="/petugas/{{$petugas->id_petugas}}/update" method="POST">
			{{csrf_field()}} 

				<div class="form-group">
			    <label for="exampleInputEmail1">ID Petugas</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Petugas"name="id_petugas" value="{{$petugas->id_petugas}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Nama Petugas</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas"name="nama_petugas" value="{{$petugas->nama_petugas}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" value="{{$petugas->username}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Password</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" name="password" value="{{$petugas->password}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID Level</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Level"name="id_level" value="{{$petugas->id_level}}"> 
			     </div>

			    </div>
			</div>	
			   
			    <button type="submit" class="btn btn-warning">Update</button>
		      </form>
		      </div>
			</div>
			</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</table>
</body>
</html>


 