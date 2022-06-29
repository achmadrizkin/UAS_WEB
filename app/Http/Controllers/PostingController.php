<?php
/* app/Http/Controllers/PostingController.php */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Posting;
use App\Models\Kategori;

class PostingController extends Controller
{
    public function index()
    {
        //tampilan keseluruhan 
        $posting = Posting::all();
        $title = "Data Keseluruhan Posting";
        return view('posting.index', compact('posting','title'));
    }

    public function create()
    {
        //tampilkan form tambah posting
        $title = "Form Tambah Posting";
        $kategori = Kategori::all();
        return view('posting.create', compact('kategori','title'));
    }

    public function store(Request $request)
    {
        //proses insert data    
        //validasi dulu
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'isi' => 'required'
        ]);
        $posting = new Posting();
        $posting->judul = $request->judul;
        $posting->kategori_id = $request->kategori_id;
        $posting->isi = $request->isi;
        $posting->save();
        return redirect()->route('posting.index')
            ->with('success', 'Berhasil menambah data');
    }

    public function show(Posting $posting)
    {
        //menampilkan detail data yang dipilih
        $title = "Data Posting Judul ".$posting->judul;
        return view('posting.show', compact('posting','title'));
    }

    public function edit(Posting $posting)
    {
        //menampilkan form edit
        $title = "Form Ubah Data Posting";
        $kategori = Kategori::all();
        return view('posting.edit', compact('kategori','posting','title'));
    }

    public function update(Request $request, Posting $posting)
    {
        //proses update data
        //validasi dulu
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'isi' => 'required'
        ]);
        $posting->judul = $request->judul;
        $posting->kategori_id = $request->kategori_id;
        $posting->isi = $request->isi;
        $posting->save();
        return redirect()->route('posting.index')
            ->with('success', 'Berhasil mengubah data');
    }

    public function destroy(Posting $posting)
    {
        //hapus data
        $posting->delete();
        return redirect()->route('posting.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
} 