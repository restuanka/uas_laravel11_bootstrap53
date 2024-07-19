@extends('layout.main2')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('peminjaman.update', $peminjaman->id_peminjam) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Id Peminjam</td><td><input type="text" name="id_peminjam" value="{{ $peminjaman->id_peminjam }}"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td><td><input type="date" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td><td><input type="date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}"></td>
        </tr>
        <tr>
            <td>Id Buku</td><td><input type="text" name="id_buku" value="{{ $peminjaman->id_buku }}"></td>
        </tr>
        <tr>
            <td>Id Anggota</td><td><input type="text" name="id_anggota" value="{{ $peminjaman->id_anggota }}"></td>
        </tr>
        <tr>
            <td>Status</td><td><input type="text" name="status" value="{{ $peminjaman->status }}"></td>
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