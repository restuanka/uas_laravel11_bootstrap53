@extends('layout.main2')
@section('content')

<h3>Master Anggota</h3>
<div class="card">
    <div class="card-header">
        <a href="{{ route('anggota.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
    </div>

<div class="card-body">
<table class="table table-sm table-stripped table-bordered">
    <tr>
        <thead>
        <td>Id Anggota</td>
        <td>Nama Anggota</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
@foreach($anggota as $item )
    <tr>
        <td>{{ $item->id_anggota }}</td>
        <td>{{ $item->nama_anggota }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('anggota.destroy', $item->id_anggota) }}" method="POST">
                <a href="{{ route('anggota.edit', $item->id_anggota) }}" class="btn btn-sm btn-primary">EDIT</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
            </form>
        </td>
    </tr>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif

</script>

</tbody>
</table>
</div>
</div>
@endsection