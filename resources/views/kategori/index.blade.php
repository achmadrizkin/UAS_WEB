<!-- resources/views/kategori/index.blade.php -->
@extends('layouts/app')
@section('title',$title)
@section('content')
<h1>{{$title}}</h1>
@include('layouts/alert')
<p><a href="{{route('kategori.create')}}">Tambah Data Kategori</a>
<table class="table table-striped" id="tabeldata" width="100%">
	<thead> <tr> 
	        <th>No</th> <th>Nama Kategori</th> <th>Jumlah Posting</th>
			<th>Action</th> </tr>
	</thead> <tbody>
	@foreach($kategori as $data) 
		<tr>
			<td>{{$loop->iteration}}</td> <td>{{$data['nama']}}</td>
			<td>{{$data['post_count']}}</td>
			<td><a href="{{route('kategori.edit',$data['id'])}}">Ubah</a> | <form method="POST" action="{{ route('kategori.destroy', $data->id) }}" onsubmit="return hapus();"  class="d-inline">
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