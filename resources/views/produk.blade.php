<!-- resources/views/produk.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
<table class="tabel" id="tabeldata">
	<thead> <tr>
	        <th>No</th> <th>Kode Produk</th> <th>Nama</th>
			<th>Harga</th> <th>Action</th> </tr>
	</thead> <tbody>
	@foreach($produk as $data)
		<tr class="@if($loop->even) genap @else ganjil @endif">
			<td>{{$loop->iteration}}</td>
			<td>{{$data['kode']}}</td>
			<td>{{$data['nama']}}</td>
			<td>{{$data['harga']}}</td>
			<td><a href="{{route('detailproduk',$data['kode'])}}">Detail</a> | <a href="#" onclick="hapus('{{$loop->iteration}}')">Hapus</a>
		</tr>
	@endforeach
	</tbody> </table>
@endsection
@push('css')
<style>
.tabel { font-family: sans-serif; color: #232323; border-collapse: collapse;}
.tabel, th, td {border: 1px solid #999;padding: 8px 20px;}
.tabel tr:hover{background-color: f1f7c8;}
.genap{background-color: #88f7c3;}
.ganjil{background-color: #f9c686;}
</style>
@endpush

@push('js')
<script>
function hapus(kode)
{
	if(confirm('Anda yakin akan menghapusnya?'))
	{
		document.getElementById("tabeldata").deleteRow(kode);
	}
}
</script>
@endpush