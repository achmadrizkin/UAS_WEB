<!-- resources/views/posting/index.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
@include('layouts/alert') 
<p><a href="{{route('posting.create')}}">Tambah Data Mobil</a>
<table class="table table-striped" id="tabeldata" width="100%">
	<thead> 
		<tr>
	        <th>No</th> 
			<th>Plat No</th>
			<th>Merek</th>
			<th>Tahun Pembuatan</th>
			<th>Warna</th>
			<th>Action</th> 
		</tr>
	</thead> <tbody>
	@foreach($posting as $data)
		<tr>
			<td>{{$loop->iteration}}</td> 
			<td>{{$data->plat_no}}</td> 
			<td>{{$data['kategori']['merek']}}</td>
			<td>{{$data->tahun_pembuatan}}</td>
			<td>{{$data->warna}}</td>
			<td><a href="{{route('posting.edit',$data['id'])}}">Ubah</a> <form method="POST" action="{{ route('posting.destroy', $data->id) }}" onsubmit="return hapus();" class="d-inline">
                    @csrf 
                <input name="_method" type="hidden" value="DELETE">
               <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
		</tr>
	@endforeach
	</tbody> </table>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
@endpush
@push('js')
<script>
function hapus(){
	if(confirm('Yakin ingin menghapus data ini?')){ return true;}
	else{return false; }
}
</script>
@endpush