@extends('backend.layouts.app')
@section('content')

  <div class="row">
    <div class="col">
      <h2>Daftar Pasien</h2>
    </div>
  </div>
  @if (session('success'))
    <div class="alert alert-warning" role="alert">
        {{ session('success') }}
    </div>
  @endif

  <table class="table">
          <thead class="table-info">
            <tr>
              <th scope="col">ID</th>
              <th scope="col"> NIK</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Telepon</th>
              <th scope="col">TB</th>
              <th scope="col">BB</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pasiens as $pasien)
                <tr>
                  <th scope="row">{{ $pasien->id_pasien }}</th>
                  <td>{{ $pasien->NIK }}</td>
                  <td>{{ $pasien->nama_pasien }}</td>
                  <td>{{ $pasien->jenis_kelamin }}</td>
                  <td>{{ $pasien->alamat }}</td>
                  <td>{{ $pasien->no_tlp }}</td>
                  <td>{{ $pasien->TB }}</td>
                  <td>{{ $pasien->BB }}</td>
                  <td><span>{{ $pasien->status }}</span></td>
                  <td>
                    <a href="#update{{ $pasien->id_pasien }}" class="btn btn-primary" title="Update Pasien" data-bs-toggle="modal">
                      Update Status
                    </a>
                    @include('backend.pasien.edit_pasien')
                  </td>
                </tr>
            @endforeach
        </tbody>
  </table>
{{-- @include('backend.pasien.detail_pasien') --}}

@endsection