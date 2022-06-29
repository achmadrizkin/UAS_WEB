<!-- resources/views/detailproduk.blade.php -->
@extends('layouts/app')
@section('title',$title." ".$detailproduk['nama'])
@section('content')
<h1>{{$title}}</h1>
Kode : <span class="info">{{$detailproduk['kode']}}</span> <br>
Nama  : <span class="info">{{$detailproduk['nama']}}</span> <br>
Harga : <span class="info">Rp {{$detailproduk['harga']}}</span> <br>
<hr>
<a href="{{ url()->previous() }}">Kembali ke Halaman Sebelumnya</a>
@endsection

@push('css')
<style>
	.info{color: red;font-weight: bold;}
</style>
@endpush 