@extends('layout.main2')
@section('content')
<h3>Tambah Data</h3>
<form action="{{ route('anggota.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Id Anggota</td><td><input type="text" name="id_anggota"></td>
        </tr>
        <tr>
            <td>Nama Anggota</td><td><input type="text" name="nama_anggota"></td>
        </tr>
        <tr>
            <td>Alamat</td><td><input type="text" name="alamat"></td>
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