@extends('layouts.master')
@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table table-striped justify-content-center">
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
        {{ $m->no_factory }}
      </td>
      <td>
        {{ $m->no_frame }}
      </td>
      <td>
        {{ $m->no_machine }}
      </td>
      <td>
        {{ $m->no_police }}
      </td>
      <td>
        {{ $m->no_bpkb }}
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
      {!! QrCode::size(100)->generate('/showItem/'.$m->id); !!}
    </td>
    <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
      <a class="btn btn-success" aria-current="page" href="{{ '/showItem/'.$m->id }}">View</a>
      <a class="btn btn-danger" aria-current="page" href="{{ '/delete/'.$m->id }}">Delet</a>
    </div>
    </td>
    </tr>
    @endforeach
  </tbody>
  </table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="import" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group mb-3">
                      <input type="file" name="file" class="form-control">
                      <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </div>
@endsection