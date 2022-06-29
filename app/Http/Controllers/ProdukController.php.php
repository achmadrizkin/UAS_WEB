<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController.php extends Controller
{
    //
    public function __construct()
    {
        $this->produk = array(
            array('kode'=>'001','nama'=>'Pensil','harga'=>'1000'),
            array('kode'=>'002','nama'=>'Pulpen','harga'=>'2000'),
            array('kode'=>'003','nama'=>'Penggaris','harga'=>'1500'),
            array('kode'=>'004','nama'=>'Penghapus','harga'=>'500'),
            array('kode'=>'005','nama'=>'Rautan','harga'=>'2000'),
            array('kode'=>'006','nama'=>'Buku Tulis','harga'=>'4000'),
            array('kode'=>'007','nama'=>'Buku Gambar','harga'=>'5000'),
        );
    }

    public function index()
    {
        //untuk menampilkan semua produk
        
    }

    public function detail($kode)
    {
        //untuk menampilkan 1 produk berdasarkan kode
    }

}
