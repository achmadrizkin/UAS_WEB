<!-- resources/views/posting/create.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
@include('layouts/alert')
<form class="card" method="POST" action="{{route('posting.store')}}" enctype="multipart/form-data">
	@csrf 
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
	    	<label for="input-placeholder">Judul</label>
			<input type="text" name="judul" id="judul" class="form-control" value="{{old('judul')}}"> <br>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	    	<label for="input-placeholder">Kategori</label>
			<select class="form-control" name="kategori_id">
				@foreach($kategori as $index=>$value)
				<option value='{{$value->id}}'>{{$value->nama}}</option>
				@endforeach
			</select>
		</div>
	</div> 
	<div class="col-md-12">
		<div class="form-group">
	    	<label for="input-placeholder">Konten</label>
			<textarea name="isi" class="form-control"></textarea>
		</div>
	</div>
	<footer class="card-footer text-right">
		 <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
        <a href="{{route('posting.index')}}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke Daftar Posting</a>
    </footer>
</form>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush