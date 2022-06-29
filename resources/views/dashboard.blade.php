<!-- resources/views/dashboard.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
<div class="row container">
	<div class="col-md-6 bg-warning text-center">
		<h2>Jumlah Kategori</h2>
		<h3>{{$jumlahkat}}</h3>
	</div>
	<div class="col-md-6 bg-primary text-center">
		<h2>Jumlah Posting</h2>
		<h3>{{$jumlahposting}}</h3>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush
