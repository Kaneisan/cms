@extends('template')
@section('title', 'Belajar Koding')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/sosmed-bg2.jpg') }}') no-repeat center center;">
    <div class="container text-center">
      <h1>My Social Media</h1>
      <p class="lead" style="color:white">Pentingnya Social Media Dalam Membangun Hubungan</p>
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
            <h2><b><a href="https://www.facebook.com/Kaneisan/" target="_blank">Facebook</a></b></h2><br>
            <h2><b><a href="https://www.linkedin.com/in/wildani-sulthon-mahmudi-678bb4147/" target="_blank">LinkedIn</b></h2><br>
            <h2><b><a href="https://www.instagram.com/kanei_01/" target="_blank">Instagram</b></h2><br>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->
@endsection
