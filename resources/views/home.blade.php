@extends('backend.layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
      
      <!-- Info boxes -->
      <div class="row">
        <div class="col-6 ">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-user-doctor"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mahasiswa</span>
              <span class="info-box-number">
                {{ $dokters }}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-6">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-stethoscope"></i></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pemeriksaan</span>
              <span class="info-box-number">{{ $konsultasis }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-6">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Pasien</span>
              <span class="info-box-number">{{ $pasiens }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-6">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-calendar-week"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pemeriksaan Hari Ini</span>
              <span class="info-box-number">{{ $konsultasitoday }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

          </section>
@endsection
