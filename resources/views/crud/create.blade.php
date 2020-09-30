@extends('master')
@section('nama', 'barang','deksripsi')
@section('content')

<form action="{{ route('crud.store') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="nama" placeholder="Nama">
    </div>
    <div>
        <input type="text" name="barang" placeholder="Barang">
    </div>
    <div>
        <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="isi deskripsi"></textarea>
    </div>
    <button>Submit</button>
</form>

@endsection