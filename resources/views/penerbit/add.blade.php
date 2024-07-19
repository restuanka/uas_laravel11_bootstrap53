@extends('layout.main2')
@section('content')
<h3>Tambah Data</h3>
<form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Id Penerbit</td><td><input type="text" name="id_penerbit"></td>
        </tr>
        <tr>
            <td>Nama Penerbit</td><td><input type="text" name="nama_penerbit"></td>
        </tr>
        <tr>
            <td>Kota</td><td><input type="text" name="kota"></td>
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