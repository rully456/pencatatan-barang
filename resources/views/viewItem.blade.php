@extends('layouts.master')
@section('content')
<table class="table">
    <tbody>
        <tr>
            <td>
                Nama
            </td>
            <th>
                {{ $item->name }}
            </th>
        </tr>
    </tbody>
  </table>
@endsection