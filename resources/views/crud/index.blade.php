@extends('master')
@section('nama', 'all barang')
@section('content')

@foreach ($crud as $item)
    <div class="crud-item">
        <div class="nama">
            <h2>{{ $item->nama }}</h2>
        </div>
        <div class="barang">
            {{ $item->barang }}
        </div>
        <div class="deskripsi">
            {{ $item->deskripsi }}
        </div>
        <a href="{{ route('crud.edit', $item->id) }}">Edit</a>
        <a href="{{ route('crud.show', $item->id) }}">Show</a>
        <td> 
            <form  method="POST" action="{{ route('crud.destroy', $item->id)}}">
                @method('DELETE')
                @csrf
                <button> Hapus </button>
            </form>
        </td>
    </div>
@endforeach

@endsection