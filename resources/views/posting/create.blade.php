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
	    	<label for="input-placeholder">Plat No</label>
			<input type="text" name="plat_no" id="plat_no" class="form-control" value="{{old('plat_no')}}"> <br>
		</div>
		<div class="form-group">
	    	<label for="input-placeholder">Tahun Pembuatan</label>
			<input type="text" name="tahun_pembuatan" id="tahun_pembuatan" class="form-control" value="{{old('thn_pembuatan')}}"> <br>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	    	<label for="input-placeholder">Merek</label>
			<select class="form-control" name="kategori_id">
				@foreach($kategori as $index=>$value)
				<option value='{{$value->id}}'>{{$value->merek}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
	    	<label for="input-placeholder">Warna</label>
			<input type="text" name="warna" id="warna" class="form-control" value="{{old('warna')}}"> <br>
		</div>
	</div> 
	<footer class="card-footer text-right">
		 <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
        <a href="{{route('posting.index')}}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke Daftar Mobil</a>
    </footer>
</form>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush