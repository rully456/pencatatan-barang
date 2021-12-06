@extends('layouts.master')
@section('content')
<div class="container ">
  <div class="row">
    <div class="col-md-auto">
      {!! QrCode::size(100)->generate('/showItem/'.$item->id); !!}
    </div>
  </div>
  <div class="row">
    <div class="col-3">Kode Barang</div>
    <div class="col-auto"> {{ $item->item_code }} </div>
  </div>
  <div class="row">
    <div class="col-3">Nama Barang</div>
    <div class="col-auto"> {{ $item->name }} </div>
  </div>
  <div class="row">
    <div class="col-3">No Register</div>
    <div class="col-auto"> {{ $item->number_register }} </div>
  </div>
  <div class="row">
    <div class="col-3">Merk/Type</div>
    <div class="col-auto">  {{ $item->brand }} </div>
  </div>
  <div class="row">
    <div class="col-3">Ukuran/CC</div>
    <div class="col-auto">  {{ $item->size }} </div>
  </div>
  <div class="row">
    <div class="col-3">Bahan</div>
    <div class="col-auto">  {{ $item->material }} </div>
  </div>
  <div class="row">
    <div class="col-3">Tahun Pembelian</div>
    <div class="col-auto">  {{ $item->purchased }} </div>
  </div>
  <div class="row">
    <div class="col-3">No Pabrik</div>
    <div class="col-auto">  {{ $item->no_factory }} </div>
  </div>
  <div class="row">
    <div class="col-3">No Rangka</div>
    <div class="col-auto">  {{ $item->no_frame }} </div>
  </div>
  <div class="row">
    <div class="col-3">No Mesin</div>
    <div class="col-auto">  {{ $item->no_machine }} </div>
  </div>
  <div class="row">
    <div class="col-3">No polisi</div>
    <div class="col-auto">  {{ $item->no_police }} </div>
  </div>  
  <div class="row">
    <div class="col-3">No BPKB</div>
    <div class="col-auto">  {{ $item->no_bpkb }} </div>
  </div>
  <div class="row">
    <div class="col-3">Asal-Usul</div>
    <div class="col-auto">  {{ $item->origin }} </div>
  </div>
  <div class="row">
    <div class="col-3">Harga (Rp)</div>
    <div class="col-auto">  {{ $item->price }} </div>
  </div>
  <div class="row">
    <div class="col-3">Keterangan</div>
    <div class="col-auto">  {{ $item->description }} </div>
  </div> 
  <a class="btn btn-warning" aria-current="page" href="{{ '/edit/'.$item->id }}">edit</a>
  <a class="btn btn-danger" aria-current="page" href="{{ '/delete/'.$item->id }}">Delet</a>
</div>


@endsection