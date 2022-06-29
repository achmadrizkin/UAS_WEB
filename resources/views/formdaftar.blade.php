<h1>Form Pendaftaran</h1>
<form method="POST" action="{{route('simpan')}}">
@csrf
Nama : <input type='text' name='nama'> <br>
Email : <input type='email' name='email'> <br>
Alamat : <textarea name='alamat'></textarea> <br>
<input type='submit' value='simpan'>
</form>
