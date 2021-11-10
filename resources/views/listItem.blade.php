@extends('layouts.master')
@section('content')
<form action="/master" method="POST">
    @csrf
    <div class="mb-3">
      <label for="item_code" class="form-label">kode barang</label>
      <input type="text" class="form-control" id="item_code" name="item_code">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">nama</label>
      <input type="text" class="form-control" id="nama" name="name">
    </div>
    <div class="mb-3">
      <label for="nomer_register" class="form-label">no register</label>
      <input type="number" class="form-control" id="nomer_register" name="register">
    </div>
    <div class="mb-3">
        <label for="ukuran" class="form-label">ukuran</label>
        <input type="number" class="form-control" id="ukuran" name="size">
      </div>
      <div class="mb-3">
        <label for="brand" class="form-label">brand</label>
        <input type="text" class="form-control" id="brand" name="brand">
      </div>
    <div class="mb-3">
        <label for="bahan" class="form-label">bahan</label>
        <input type="text" class="form-control" id="bahan" name="material">
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">harga</label>
        <input type="number" class="form-control" id="harga" name="price">
      </div>
      <div class="mb-3">
        <label for="asalbarang" class="form-label">asal usul</label>
        <input type="text" class="form-control" id="asalbarang" name="origin">
      </div>
      <div class="mb-3">
        <label for="tahun pembelian" class="form-label">tahun pembelian`</label>
        <input type="number" class="form-control" id="tahun pembelian`" name="purchased">
      </div>
      <div class="mb-3">
        <label for="keterangan" class="form-label">keterangan</label>
        <textarea class="form-control" placeholder="Leave a comment here" name="description" id="keterangan" style="height: 100px"></textarea>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
