<!-- resources/views/kategori/show.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>Posting dengan Kategori {{$kategori->nama}}</h1>

@foreach($post as $index=>$value)
	{{$value['judul']}}	
@endforeach
@endsection

