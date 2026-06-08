@extends('layout.app')

@section('title', 'Data Penduduk')

@section('content')
<h1>Data Penduduk</h1>
<table class="table table-hover">
<thead>
<tr>
<th>NIK</th>
<th>NAMA</th>
<th>JK</th>
<th>ALAMAT</th>
</tr>
</thead>
<tbody>
@foreach($penduduk as $item)
<tr>
<td>{{ $item->nik }}</td>
<td>{{ $item->nama }}</td>
<td>{{ $item->jk }}</td>
<td>{{ $item->alamat }}</td>
</tr>
 
@endforeach
</tbody>
</table> 

    
@endsection