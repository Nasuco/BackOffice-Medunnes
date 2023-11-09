@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar Dosen</h2>
    </div>
    <div class="col">
        {{-- <div class="input-group">
            <div class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
            </button>
        </div> --}}
    </div>
    {{-- @if (session('message_delete'))
    <div class="alert alert-danger" role="alert">
        {{ session('message_delete') }}
    </div>
    @endif --}}
</div>
  
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Gelar</th>
        </tr>
    </thead>
         <tbody>
            @foreach ($dosen as $dosen)
                <tr>
                    <th scope="row">{{ $dosen->id_dosen }}</th>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama_dosen }}</td>
                    <td>{{ $dosen->gelar }}</td>
                    {{-- <td>
                            <a href="#delete{{ $konsultasi->id_konsultasi }}" class="btn btn-danger btn-sm " data-bs-toggle="modal">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            @include('backend.konsultasi.hapus_konsultasi')
                   </td> --}}
                       
                </tr>
            @endforeach
         </tbody>
  </table>
  
{{-- @include('backend.konsultasi.hapus_konsultasi') --}}
@endsection