<?php
/* app/Http/Controllers/ProdukController.php */
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
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
        $title = "Home";
        return view('produkwelcome',compact('title'));
    }

    public function produk()
    {
        //untuk menampilkan semua produk
        $title = "Data Produk";
        $produk = $this->produk;
        return view('produk', compact('produk','title'));
    }
    
    public function detail($kode)
    {
       //cari kode ini ada atau tidak di array
        $key = array_search($kode, array_column($this->produk, 'kode'));
        $detailproduk = $this->produk[$key];
        $title = "Detail Produk";
        //untuk menampilkan 1 produk berdasarkan kode
        return view('detailproduk', compact('detailproduk','title'));  
    }
}
