@extends('layout.main2')
@section('content')
<h3>Tambah Data</h3>
<form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Id Buku</td><td><input type="text" name="id_buku"></td>
        </tr>
        <tr>
            <td>Nama Buku</td><td><input type="text" name="nama_buku"></td>
        </tr>
        <tr>
            <td>Pengarang</td><td><input type="text" name="pengarang"></td>
        </tr>
        <tr>
            <td>Penerbit</td><td><input type="text" name="penerbit"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td><td><input type="date" name="tahun_terbit"></td>
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