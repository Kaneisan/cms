@extends('template')
<!-- END : Header -->
@section('title', $article->title)

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/contact-bg.jpg') }}') no-repeat center center;">
    <div class="container text-center">
    <h1>{{$article->title}}</h1>
    </div>
  </header>
  <!-- END : Header -->
@endsection

@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <img class="card-img-top" width='512px' height='512px' class="card-img-top" src={{$article->feature_image}} style="padding:50px 150px;smargin-left:auto;margin-right:auto;">
          {{-- <img class="card-img-top" src={{$article->feature_image}} style="height:512px;width:512px;padding:20px;margin-left:auto;margin-right:auto;"> --}}
          <h2>{{$article->title}}</h2>
          <p class="lead">{{$article->content}}</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
