@extends('layouts.master')
@section('content')
{{-- @if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif --}}


<div class="card mt-5 ">
  <div class="card-head">
    <div class="">tambah data</div>
    <div class="row">
      <div class="col-6"> 
        <form class="" action="import" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
    
            <input type="file" name="file" class="form-control">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <div class="col-3"></div>
      <div class="col-3 ">
        <form action="search">
          <div class="input-group">
          <input class="form-control " type="text" name="search" placeholder="Search.." value="{{ request('search') }}">
          <button class="btn btn-outline-success " type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>    
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead> 
        <tr>
          <th>
            <div class="form-check">
              {{-- <input type="checkbox" {!! $items->merge(['class' => 'rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}> --}}
            </div>
          </th>
          <th>NO</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>No Register</th>
          <th>Merk/Type</th>
          <th>Ukuran/CC</th>
          <th>Bahan</th>
          <th>Tahun Pembelian</th>
          <th>No Pabrik</th>
          <th>No Rangka</th>
          <th>No Mesin</th>
          <th>No Polisi</th>
          <th>No BPKB</th>
          <th>Asal-Usul</th>
          <th>Harga (Rp)</th>
          <th>Keterangan</th>
          <th>QrCode</th>
        <th>View / Delet</th>  
        </tr>
      </thead>
      
      <tbody>
        @foreach ($items as $m)
        <tr>
          <td>
            <div class="form-check">
              <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
            </div>
          </td>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $m->item_code }}</td>
          <td>{{ $m->name }}</td>
          <td>{{ $m->number_register }}</td>
          <td>{{ $m->brand }}</td>
          <td>{{ $m->size }}</td>
          <td>{{ $m->material }}</td>
          <td>{{ $m->purchased }}</td>
          <td>{{ $m->no_factory }}</td>
          <td>{{ $m->no_frame }}</td>
          <td>{{ $m->no_machine }}</td>
          <td>{{ $m->no_police }}</td>
          <td>{{ $m->no_bpkb }}</td>
          <td>{{ $m->origin }}</td>
          <td>{{ $m->price }}</td>
          <td>{{ $m->description }}</td>
        <td>{!! QrCode::size(100)->generate('/showItem/'.$m->id); !!}</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a class="btn btn-success" aria-current="page" href="{{ '/showItem/'.$m->id }}">View</a>
          <a class="btn btn-warning" aria-current="page" href="{{ '/edit/'.$m->id }}">edit</a>
          <a class="btn btn-danger" aria-current="page" href="{{ '/delete/'.$m->id }}">Delet</a>
          </div>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
{{ $items->links() }}
{{-- <script>
// $("#head-cb").on('click',function(){
//   console.log("A")
//   // var isChecked = $("#head-cb").prop('checked')
//   // $(".cb-child").prop('checked',isChecked)
//   // $("#button-nonaktif-all,#button-export-terpilih").prop('disabled',!isChecked)
//   // $("#button-aktif-all,#button-export-terpilih").prop('disabled',!isChecked)
// })
</script> --}}
@endsection