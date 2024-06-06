@extends('layout.app')

@section('title')
Edit Karya | Heart Admin
@endsection

@section('content')
<h3>Edit Karya</h3>
<div class="form-login">
  <form action="{{ url('/karya/update/' . $karya->id_karya) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="categories">Judul</label>
    <input class="input" type="text" name="judul" id="categories" placeholder="Judul"
      value="{{ old('judul', $karya->judul) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="description"
      placeholder="Description">{{ old('deskripsi', $karya->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="price">Harga</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Harga"
      value="{{ old('harga', $karya->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <img src="{{ asset('img_categories/' . $karya->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
