@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar spesialis Dokter</h2>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#CreateSpesialis">
            Tambah spesialis
        </button>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($message = Session::get('message_delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('message_delete') }}
        </div>
    @endif
</div>

<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama spesialis</th>
            <th scope="col">Img spesialis</th>
            {{-- <th scope="col">Action</th> --}}
        </tr>
    </thead>
         <tbody>
            @foreach ($spesialis as $spesialis)
                <tr>
                    <th scope="row">{{ $spesialis->id_spesialis }}</th>
                    <td>{{ $spesialis->nama_spesialis }}</td>
                    <td><img src="{{ asset('storage/' . $spesialis->img_spesialis) }}" alt="{{ $spesialis->nama_spesialis }}" width="100"></td>
                    {{-- <td>
                        
                            <a href="#delete{{ $spesialis->id_spesialis }}" class="btn btn-danger btn-sm " data-bs-toggle="modal">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            @include('backend.spesialis.hapus_spesialisasi')
                   
                    </td> --}}
                </tr>
            @endforeach
         </tbody>
  </table>
  
@include('backend.spesialis.create_spesialis')
@endsection