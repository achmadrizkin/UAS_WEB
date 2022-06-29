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
        $title = "Data Keseluruhan Kategori";
        return view('kategori.index', compact('kategori','title'));
    }

    public function create()
    {
        //tampilkan form tambah kategori
        $title = "Form Tambah Kategori";
        return view('kategori.create', compact('title'));
    }

    public function store(Request $request)
    {
        //proses insert data
        //validasi dulu
        $request->validate([
            'nama' => 'required'
        ]);
        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->created_by = $request->session()->get('username');
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Berhasil menambah data');
    }

    public function edit(Kategori $kategori)
    {
        //menampilkan form edit
        $title = "Form Ubah Data Kategori";
        return view('kategori.edit', compact('kategori','title'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        //proses update data
        //validasi dulu
        $request->validate([
            'nama' => 'required'
        ]);
        $kategori->nama = $request->nama;
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