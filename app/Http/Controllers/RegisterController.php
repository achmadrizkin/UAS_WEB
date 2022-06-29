<?php
// app/Http/Controllers/RegisterController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function daftar()
    {
        return view('formdaftar');
    }
    public function simpan(Request $request)
    {
       $data['nama'] = $request->nama;
       $data['email'] = $request->email;
       $data['alamat'] = $request->alamat;
       $judul = "Terima Kasih Telah Mengisi Form";
       return view('hasilform',compact('data','judul'));
    }
}
