@extends('layouts.master')
@section('content')
<form action="/edit/{{ $item->id }}" method="POST">
  <h4>Edit item</h4>
  @csrf
  <div class="row">
    <div class="col">    
      <div class="mb-3">
      <label for="item_code" class="form-label">kode barang</label>
      <input type="text" class="form-control" id="item_code" name="item_code" value="{{ $item->item_code }}"> 
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="nama" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" name="name" value="{{ $item->name }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="nomer_register" class="form-label">no register</label>
        <input type="text" class="form-control" id="nomer_register" name="number_register" value="{{ $item->number_register }}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="brand" class="form-label">brand</label>
        <input type="text" class="form-control" id="brand" name="brand" value="{{ $item->brand }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="ukuran" class="form-label">ukuran</label>
        <input type="text" class="form-control" id="ukuran" name="size" value="{{ $item->size }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="bahan" class="form-label">bahan</label>
        <input type="text" class="form-control" id="bahan" name="material" value="{{ $item->material }}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="tahun pembelian" class="form-label">tahun pembelian</label>
        <input type="number" class="form-control" id="tahun pembelian" name="purchased" value="{{ $item->purchased }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="no_pabrik" class="form-label">no pabrik</label>
        <input type="text" class="form-control" id="no_pabrik" name="no_factory" value="{{ $item->no_factory }}"> 
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="no_rangka" class="form-label">no rangka</label>
        <input type="text" class="form-control" id="no_rangka" name="no_frame" value="{{ $item->no_frame }}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="no_mesin" class="form-label">no mesin</label>
        <input type="text" class="form-control" id="no_mesin" name="no_machine" value="{{ $item->no_machine }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="no_polisi" class="form-label">no police</label>
        <input type="text" class="form-control" id="no_polisi" name="no_police" value="{{ $item->no_police }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="no_bpkb" class="form-label">no BPKB</label>
        <input type="text" class="form-control" id="no_bpkb" name="no_bpkb" value="{{ $item->no_bpkb }}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="asalbarang" class="form-label">asal usul</label>
        <input type="text" class="form-control" id="asalbarang" name="origin" value="{{ $item->origin }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="harga" class="form-label">harga</label>
        <input type="text" class="form-control" id="harga" name="price" value="{{ $item->price }}">
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="keterangan" class="form-label">keterangan</label>
        <textarea class="form-control" placeholder="" name="description" id="keterangan" style="height: 100px">{{ $item->description }}</textarea>
      </div>
    </div>
  </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection
