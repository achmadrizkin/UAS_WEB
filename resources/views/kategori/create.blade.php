<!-- resources/views/kategori/create.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
@include('layouts/alert')
<form class="card" method="POST" action="{{route('kategori.store')}}" enctype="multipart/form-data">
	@csrf
<div class="row"> 
	<div class="col-md-6">
		<div class="form-group">
	    	<label for="input-placeholder">Nama</label>
			<input type="text" name="nama" id="nama" class="form-control" value="{{old('nama')}}"> <br>
		</div>
	</div>
	<footer class="card-footer text-right">
		 <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
        <a href="{{route('kategori.index')}}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke Daftar Kategori</a>
    </footer>
</form>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush