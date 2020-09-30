@extends('master')
@section('nama', 'barang' ,'deksripsi')
@section('content')

<h1>{{ $crud->nama }}</h1>
<p>{{ $crud->barang}}</p>
<p>{{ $crud->deskripsi}}</p>

@endsection