@extends('layouts.app')

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1>Edit Data inventaris</h1>
		@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row"> 
			<div class="col-lg-12">
			<form action="/inventaris/{{$inventaris->id_inventaris}}/update" method="POST">
			{{csrf_field()}} 


			    <div class="form-group">
			    <label for="exampleInputEmail1">ID inventaris</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID inventaris"name="id_inventaris" value="{{$inventaris->id_nasabah}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama inventaris"name="nama" value="{{$inventaris->nama}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Kondisi</label>
			    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kondisi" name="kondisi" value="{{$inventaris->kondisi}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Keterangan</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" name="keterangan" value="{{$inventaris->keterangan}}"> 
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumalh"name="jumlah" value="{{$inventaris->jumlah}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID jenis</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id_jenis"name="id_jenis" value="{{$inventaris->id_jenis}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal</label>
			    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal Register"name="tanggal_register" value="{{$inventaris->tanggal_register}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID Ruang</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Ruang"name="id_ruang" value="{{$inventaris->id_ruang}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">Kode Inventaris</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Inventaris"name="kode_inventaris" value="{{$inventaris->kode_inventaris}}">
			     </div>

			     <div class="form-group">
			    <label for="exampleInputEmail1">ID Petugas</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Petugas"name="id_petugas" value="{{$inventaris->id_petugas}}">
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

