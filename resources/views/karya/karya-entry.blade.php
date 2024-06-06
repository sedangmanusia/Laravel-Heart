@extends('layout.app')

@section('title')
Tambah Karya | Heart Admin
@endsection

@section('content')
<h3>Masukkan Data Karya</h3>
<div class="form-login">
  <form action="{{ url('/karya/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="categories">Judul</label>
    <input class="input" type="text" name="judul" id="categories" placeholder="Judul" value="{{ old('judul') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Harga</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Harga" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
