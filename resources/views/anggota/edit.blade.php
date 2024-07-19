@extends('layout.main2')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Anggota</td><td><input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}"></td>
        </tr>
        <tr>
            <td>Alamat</td><td><input type="text" name="alamat" value="{{ $anggota->alamat }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection