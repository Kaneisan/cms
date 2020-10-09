@extends('template')
@section('title', 'About Us')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>About Belajar Koding</h1>
      <p class="lead" style="color:white" >Data diri</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection

@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h2>Halaman About Us</h2>
          <p class="lead">
              Nama : Wildani Sulthon Mahmudi<br>Kelas : MI-2E<br>NIM : 1931710170
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
