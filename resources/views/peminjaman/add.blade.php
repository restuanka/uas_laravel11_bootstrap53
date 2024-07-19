@extends('layout.main2')
@section('content')
<h3>Tambah Data</h3>
<form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Id Peminjam</td><td><input type="text" name="id_peminjam"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td><td><input type="date" name="tgl_pinjam"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td><td><input type="date" name="tgl_kembali"></td>
        </tr>
        <tr>
            <td>Id Buku</td><td><input type="text" name="id_buku"></td>
        </tr>
        <tr>
            <td>Id Anggota</td><td><input type="text" name="id_anggota"></td>
        </tr>
        <tr>
            <td>Status</td><td><input type="text" name="status"></td>
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