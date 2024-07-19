<?php

namespace App\Http\Controllers;
use App\Models\AnggotaModel;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = AnggotaModel::get();
        return view ('anggota/index', compact('anggota'));
    }

    public function create()
    {
       return view ('anggota.add');
    }

    public function store(Request $request)
    {
        $anggota = new AnggotaModel();
        $anggota->id_anggota = $request->id_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect('anggota');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $anggota = AnggotaModel::find($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, string $id)
    {
        $anggota = AnggotaModel::find($id);
        $anggota->id_anggota = $request->id_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect('anggota');
    }

    public function destroy(string $id)
    {
        $product = AnggotaModel::findOrFail($id);
        $product->delete();
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}
