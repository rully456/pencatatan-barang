@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-md-auto">
      {!! QrCode::size(100)->generate('/showItem/'.$Item->id); !!}
    </div>
    <div class="col"></div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Nama Barang</div>
    <div class="col"> {{ $Item->name }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No Register</div>
    <div class="col"> {{ $Item->number_register }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Merk/Type</div>
    <div class="col">  {{ $Item->brand }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Ukuran/CC</div>
    <div class="col">  {{ $Item->size }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Bahan</div>
    <div class="col">  {{ $Item->material }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Tahun Pembelian</div>
    <div class="col">  {{ $Item->purchased }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No Pabrik</div>
    <div class="col">  {{ $Item->item_code }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No Rangka</div>
    <div class="col">  kosong </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No Mesin</div>
    <div class="col">  kosong </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No polisi</div>
    <div class="col">  kosong </div>
  </div>  
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">No BPKB</div>
    <div class="col">  kosong </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Asal-Usul</div>
    <div class="col">  {{ $Item->origin }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Harga (Rp)</div>
    <div class="col">  {{ $Item->price }} </div>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">Keterangan</div>
    <div class="col">  {{ $Item->description }} </div>
  </div>
</div>

@endsection