@extends('master')
@section('id','nama','barang','deskripsi')
@section('content')

<form action="{{ route('crud.update', $crud->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <input type="text" name="nama" placeholder="nama" value="{{ $crud->nama }}">
    </div>
    <div>
        <input type="text" name="barang" placeholder="barang" value="{{ $crud->barang }}">
    </div>
    <div>
        <textarea name="deskripsi" id="" cols="30" rows="10" > {{ $crud->deskripsi }}
        </textarea>
    </div>
        <button>Simpan</button>
</form>
    
@endsection