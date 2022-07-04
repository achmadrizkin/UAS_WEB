<!-- resources/views/kategori/edit.blade.php -->
@extends('layouts/app')
@section('title',$title) 
@section('content')
<h1>{{$title}}</h1>
@include('layouts/alert')
<form class="card" method="POST" action="{{route('kategori.update', ['kategori' => $kategori])}}" enctype="multipart/form-data">
	@csrf
    @method('PUT') 
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
	    	<label for="input-placeholder">Kode</label>
			<input type="text" name="kode" id="kode" class="form-control" value="{{ $kategori->kode ?? old('kode') }}"> <br>
		</div>
		<div class="form-group">
	    	<label for="input-placeholder">Merek</label>
			<input type="text" name="merek" id="merek" class="form-control" value="{{ $kategori->merek ?? old('merek') }}"> <br>
		</div>
	</div>
	<footer class="card-footer text-right">
		 <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
        <a href="{{route('kategori.index')}}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke Daftar Mobil</a>
    </footer>
</form>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush