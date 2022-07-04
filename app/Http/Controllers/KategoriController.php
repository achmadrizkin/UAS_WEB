<?php
/* app/Http/Controllers/KategoriController.php */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Kategori;
use App\Models\Posting;

class KategoriController extends Controller
{
    public function index()
    {
        //tampilan keseluruhan data kategori
        $kategori = Kategori::withCount('post')->get();
        $title = "Data Keseluruhan Merek Mobil";
        return view('kategori.index', compact('kategori','title'));
    }

    public function create()
    {
        //tampilkan form tambah kategori
        $title = "Form Tambah Merek Mobil";
        return view('kategori.create', compact('title'));
    }

    public function store(Request $request)
    {
        //proses insert data
        //validasi dulu
        $request->validate([
            'nama' => 'required',
            'kode' => 'required'
        ]);
        $kategori = new Kategori();
        $kategori->merek = $request->nama;
        $kategori->kode = $request->kode;
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Berhasil menambah data');
    }

    public function edit(Kategori $kategori)
    {
        //menampilkan form edit
        $title = "Form Ubah Data Merek Mobil";
        return view('kategori.edit', compact('kategori','title'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        //proses update data
        //validasi dulu
        $request->validate([
            'kode' => 'required',
            'merek' => 'required'
        ]);
        $kategori->kode = $request->kode;
        $kategori->merek = $request->merek;
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'Berhasil mengubah data');
    }

    public function destroy(Kategori $kategori)
    {
        //hapus data
        $kategori->delete();
        return redirect()->route('kategori.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}