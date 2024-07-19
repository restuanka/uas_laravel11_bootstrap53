<?php

namespace App\Http\Controllers;
use App\Models\PenerbitModel;

use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = PenerbitModel::get();
        return view ('penerbit/index', compact('penerbit'));
    }

    public function create()
    {
       return view ('penerbit.add');
    }

    public function store(Request $request)
    {
        $penerbit = new PenerbitModel();
        $penerbit->id_penerbit = $request->id_penerbit;
        $penerbit->nama_penerbit = $request->nama_penerbit;
        $penerbit->kota = $request->kota;
        $penerbit->save();
        return redirect('penerbit');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $penerbit = PenerbitModel::find($id);
        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, string $id)
    {
        $penerbit = PenerbitModel::find($id);
        $penerbit->id_penerbit = $request->id_penerbit;
        $penerbit->nama_penerbit = $request->nama_penerbit;
        $penerbit->kota = $request->kota;
        $penerbit->save();
        return redirect('penerbit');
    }

    public function destroy(string $id)
    {
        $product = PenerbitModel::findOrFail($id);
        $product->delete();
        return redirect()->route('penerbit.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}
