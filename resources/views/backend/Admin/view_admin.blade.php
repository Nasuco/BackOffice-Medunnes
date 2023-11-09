@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>{{ Auth::user()->name }}</h2>
    </div>
    <div class="col">
    </div>
</div>
                <div class="row">
                    <div class="col">
                    <p>ID Admin</p>
                    </div>
                    <div class="col" id="s_id">
                    <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ Auth::user()->id }}</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <p>Nama Admin</p>
                    </div>
                    <div class="col" id="s_nama">
                    <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ Auth::user()->name }}</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <p>Email Admin</p>
                    </div>
                    <div class="col" id="s_email">
                    <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ Auth::user()->email }}</button>
                    </div>
                </div>

@endsection