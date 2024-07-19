@extends('layout.main2')
@section('content')

<h3>Master Peminjaman</h3>
<div class="card">
    <div class="card-header">
        <a href="{{ route('peminjaman.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
    </div>

<div class="card-body">
<table class="table table-sm table-stripped table-bordered">
    <tr>
        <thead>
        <td>Id Peminjam</td>
        <td>Tanggal Pinjam</td>
        <td>Tanggal Kembali</td>
        <td>Id Buku</td>
        <td>Id Anggota</td>
        <td>Status</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
@foreach($peminjaman as $item )
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->id_peminjam }}</td>
        <td>{{ $item->tgl_pinjam }}</td>
        <td>{{ $item->tgl_kembali }}</td>
        <td>{{ $item->id_buku }}</td>
        <td>{{ $item->id_anggota }}</td>
        <td>{{ $item->status }}</td>
        <td>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('peminjaman.destroy', $item->id_peminjam) }}" method="POST">
                <a href="{{ route('peminjaman.edit', $item->id_peminjam) }}" class="btn btn-sm btn-primary">EDIT</a>
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