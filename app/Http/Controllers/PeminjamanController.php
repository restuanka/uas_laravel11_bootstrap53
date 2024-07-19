<?php

namespace App\Http\Controllers;
use App\Models\PeminjamanModel;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = PeminjamanModel::get();
        return view ('peminjaman/index', compact('peminjaman'));
    }

    public function create()
    {
       return view ('peminjaman.add');
    }

    public function store(Request $request)
    {
        $peminjaman = new PeminjamanModel();
        $peminjaman->id_peminjam = $request->id_peminjam;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->status = $request->status;
        $peminjaman->save();
        return redirect('peminjaman');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $peminjaman = PeminjamanModel::find($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, string $id)
    {
        $peminjaman = PeminjamanModel::find($id);
        $peminjaman->nama_peminjam = $request->nama_peminjam;
        $peminjaman->save();
        return redirect('peminjaman');
    }

    public function destroy(string $id)
    {
        $product = PeminjamanModel::findOrFail($id);
        $product->delete();
        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}
