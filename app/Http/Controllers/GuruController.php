<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $data = Guru::where('id_guru', 'like', '%' . $search . '%')
                ->orWhere('nama_guru', 'like', '%' . $search . '%')
                ->paginate(10)->onEachSide(2)->fragment('std');
        } else {
            $data = Guru::paginate(10)->onEachSide(2)->fragment('std');    
        }    
        return view('guru.index')->with([
            'guru' => $data,
            'search' => $search
        ]);
    }

    public function store(StoreGuruRequest $request)
    {
        $validate = $request->validated();
        $Guru = new Guru;
        $Guru->id_guru = $request->id_guru;
        $Guru->nama_guru = $request->nama_guru;
        $Guru->alamat = $request->alamat;
        $Guru->phone = $request->phone;
        $Guru->gender = $request->gender;
        $Guru->save();
        return redirect('guru')->with('msg', 'Add Sukses');
    }

    public function show($id_guru)
    {        
        $data = Guru::find($id_guru);
        if (!$data) {
            return redirect('guru')->with('msg', 'Guru tidak ditemukan');
        }
        return view('guru.edit')->with([
            'id_guru' => $id_guru,
            'nama_guru' => $data->nama_guru,
            'alamat' => $data->alamat,
            'gender' => $data->gender,
            'phone' => $data->phone,            
        ]);
    }

    public function update(UpdateGuruRequest $request, $id_guru)
    {
        $data = Guru::find($id_guru);
        if (!$data) {
            return redirect('guru')->with('msg', 'Guru tidak ditemukan');
        }
        $data->nama_guru = $request->nama_guru;
        $data->alamat = $request->alamat;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->save();
        return redirect('guru')->with('msg', 'Edit ' . $data->nama_guru . ' berhasil');
    }

    public function destroy($id_guru)
    {
        $data = Guru::find($id_guru);
        if (!$data) {
            return redirect('guru')->with('msg', 'Guru tidak ditemukan');
        }
        $data->delete();
        return redirect('guru')->with('msg', 'Hapus ' . $data->nama_guru . ' berhasil');
    }
}
