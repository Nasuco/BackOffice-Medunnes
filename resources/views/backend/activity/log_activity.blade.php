@extends('backend.layouts.app')
@section('content')

<div class="row">
  <div class="col">
    <h2>Log Activity</h2>
  </div>
  {{-- <div class="col">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Pasien</button></li>
          <li><button class="dropdown-item" type="button">Dokter</button></li>
        </ul>
      </div>
  </div> --}}
</div>

<table class="table">
       <thead class="table-info">
         <tr>
           <th scope="col">ID</th>
           <th scope="col">ID User</th>
           <th scope="col">Access</th>
           <th scope="col">Changed ID</th>
           <th scope="col">Activity</th>
           <th scope="col">Properties</th>
           <th scope="col">Date</th>
         </tr>
       </thead>
       <tbody>
        @foreach ($activity as $activity)
          <tr>
            <th scope="row">{{ $activity->id }}</th>
            <td>{{ $activity->causer_id }}</td>
            <td>{{ $activity->subject_type }}</td>
            <td>{{ $activity->subject_id }}</td>
            <td>{{ $activity->description }}</td>
            <td>{{ $activity->properties }}</td>
            <td>{{ $activity->created_at }}</td>
          </tr>
        @endforeach
       </tbody>
</table>

@endsection