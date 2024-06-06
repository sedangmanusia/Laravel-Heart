@extends('layout.app')

@section('title')
Hapus Karya | Heart Admin
@endsection

@section('content')
<h3>Hapus Karya</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/karya/destroy/' . $karya->id_karya ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/karya">
      No
    </a>
  </button>
</div>
@endsection
