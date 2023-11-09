@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar dokter</h2>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#CreateDokter">
            Tambah dokter
        </button>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('message'))
    <div class="alert alert-warning" role="alert">
        {{ session('message') }}
    </div>
    @endif
    @if (session('message_delete'))
    <div class="alert alert-danger" role="alert">
        {{ session('message_delete') }}
    </div>
    @endif
</div>

<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">ID Spesialisasi</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Jumlah Konsultasi Pasien</th>
            <th scope="col"></th>
            <th scope="col">Action</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dokter as $d)
            <tr>
                <th scope="row" class="id_dokter">{{ $d->id_dokter }}</th>
                <th class="nama_dokter">{{ $d->nama_dokter }}</th>
                <th  class="text-center">{{ $d->spesialis_id}}</th>
                <th class="">{{ $d->status }}</th>
                <td class="nama_dokter text-center">{{ $d->konsultasi->count() }}</td>
                <td class="col-sm-1">
                    <a href="#edit{{ $d->id_dokter }}" class="btn btn-warning btn-sm editDokter" title="Edit Dokter" data-bs-toggle="modal">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    @include('backend.dokter.update_dokter')
                </td>
                <td class="col-sm-1">
                    <a href="#show{{ $d->id_dokter }}" class="btn btn-success btn-sm showDokter" data-bs-toggle="modal">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    @include('backend.dokter.show_dokter')
                </td>
                <td class="col-sm-1">
                    <a href="#delete{{ $d->id_dokter }}" class="btn btn-danger btn-sm " data-bs-toggle="modal">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                    @include('backend.dokter.delete_dokter')
                </td>
                <td class="col-sm-1">
                    <a href="#history{{ $d->id_dokter }}" class="btn btn-info btn-sm " data-bs-toggle="modal">
                        <i class="bi bi-chat-fill"></i>
                    </a>
                    @include('backend.dokter.history_dokter')
                </td>
                {{-- <td class="col-sm-1">
                    <a href="#rating{{ $d->id_dokter }}" class="btn btn-primary btn-sm " data-bs-toggle="modal">
                        <i class="bi bi-graph-up"></i>
                    </a>
                    @include('backend.dokter.rating_dokter')
                </td> --}}
                
            </tr>
        @endforeach
    </tbody>
</table>

@include('backend.dokter.create_dokter') 
@endsection
