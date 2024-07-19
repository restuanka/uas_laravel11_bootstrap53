<?php

namespace App\Http\Controllers;
use App\Models\BukuModel;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = BukuModel::get();
        return view ('buku/index', compact('buku'));
    }

    public function create()
    {
       return view ('buku.add');
    }

    public function store(Request $request)
    {
        $buku = new BukuModel();
        $buku->id_buku = $request->id_buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();
        return redirect('buku');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $buku = BukuModel::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, string $id)
    {
        $buku = BukuModel::find($id);
        $buku->id_buku = $request->id_buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();
        return redirect('buku');
    }

    public function destroy(string $id)
    {
        $product = BukuModel::findOrFail($id);
        $product->delete();
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}