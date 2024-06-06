@extends('layout.app')

@section('title')
Karya | Heart Admin
@endsection

@section('content')
<h3>Karya</h3>
<button type="button" class="btn btn-tambah">
  <a href="/karya/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">Photo</th>
        <th>Judul</th>
        <th scope="col" style="width: 15%">Deskripsi</th>
        <th scope="col" style="width: 30%">Harga</th>
        <th scope="col" style="width: 20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($karya as $karya)
    <tr>
      <td><img src="{{ asset('img_categories/' . $karya->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $karya->judul }}</td>
      <td>{{ $karya->deskripsi }}</td>
      <td>Rp. {{ number_format($karya->harga) }}</td>
      <td>
        <a class='btn-edit' href="/karya/edit/{{ $karya->id_karya }}">Edit</a>
        |
        <a class='btn-delete' href="/karya/hapus/{{ $karya->id_karya }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
