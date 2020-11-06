@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Halaman Utama</h1>
      </div>

    <!-- Content Row -->
    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2 bg">

        <a href="/email" style="text-decoration: none;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Email Terkirim</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-envelope fa-2x text-gray-300"></i>
              </div>
            </div>
        </a>
          </div>

        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">

        <div class="card border-left-primary shadow h-100 py-2 bg">
            <a href="/lihatArtikel" style="text-decoration: none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Artikel</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $artikel }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-book fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
        </div>

      </div>
    </div>
    <!-- Content Row -->
    <hr class="bg">
<br>
    <h3>Pengumuman</h3>
<br>
    <div class="row">

      <!-- Area Chart -->
      <div class="col-md-12 mt-2">
        @foreach ($pengumuman as $ann)
        <div class="alert alert-success" role="alert">
                  <h4>{{ $ann->judul }} !!</h4>
                  <hr>
                <p class="card-text">{!! $ann->isi !!}</p>
                <h6>{{ $ann->created_at }}</h6>
         </div>
        @endforeach
    </div>

  </div>
  <!-- /.container-fluid -->

@endsection
