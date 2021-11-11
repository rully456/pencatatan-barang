@extends('layouts.master')
@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th>
        NO
      </th>
      <th>
        Kode Barang
      </th>
      <th>
        Nama Barang
      </th>
      <th>
        No Register
      </th>
      <th>
        Merk/Type
      </th>
      <th>
        Ukuran/CC
      </th>
      <th>
        Bahan
      </th>
      <th>
        Tahun Pembelian
      </th>
      <th>
        No Pabrik
      </th>
      <th>
        No Rangka
      </th>
      <th>
        No Mesin
      </th>
      <th>
        No Polisi
      </th>
      <th>
        No BPKB
      </th>
      <th>
        Asal-Usul
      </th>
      <th>
        Harga (Rp)
      </th>
      <th>
        Keterangan
      </th>
      <th>
        QrCode
      </th>
    <th>
      View / Delet
    </th>  
    </tr>
    
  </thead>
  
  <tbody>
    @foreach ($items as $m)
    <tr>
      <td>
        {{ $loop->iteration }}
      </td>
      <td>
        {{ $m->item_code }}
      </td>
      <td>
        {{ $m->name }}
      </td>
      <td>
        {{ $m->number_register }}
      </td>
      <td>
        {{ $m->brand }}
      </td>
      <td>
        {{ $m->size }}
      </td>
      <td>
        {{ $m->material }}
      </td>
      <td>
        {{ $m->purchased }}
      </td>
      <td>
        No Pabrik
      </td>
      <td>
        No Rangka
      </td>
      <td>
        No Mesin
      </td>
      <td>
        No Polisi
      </td>
      <td>
        No BPKB
      </td>
      <td>
        {{ $m->origin }}
      </td>
      <td>
        {{ $m->price }}
      </td>
      <td>
        {{ $m->description }}
      </td>
    <td>
      {{ $m->qrcode }}
    </td>
    <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
      <a id="viewitem"class="btn btn-success" aria-current="page" href="{{ '/viewItem/'.$Item->id }}">View</a>
      <a id="#"class="btn btn-danger" aria-current="page" href="#">Delet</a>
    </div>
    </td>
    </tr>
    @endforeach
  </tbody>
  
  </table>

@endsection