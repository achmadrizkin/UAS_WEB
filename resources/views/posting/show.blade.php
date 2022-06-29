<!-- resources/views/kategori/show.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$posting->judul}}</h1>
<h5>Kategori : {{$posting->kategori->nama}}</h5>
{{$posting->isi}}
@endsection 