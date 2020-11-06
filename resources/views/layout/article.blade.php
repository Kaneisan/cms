@extends('template')
@section('title', $page) <!-- memanggil variable pada controller -->

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/contact-bg.jpg') }}') no-repeat center center;">
    <div class="container text-center">
    <h1>{{$page}}</h1>
      <p class="lead" style="color:white" >Kumpulan artikel yang telah saya buat</p>
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
            {{-- foreach memanggil semua data pada database --}}
            @foreach ($articles as $article) <!-- as sebagai variable lokal -->
            <div class="card mb-4">
                {{-- pemanggilan gambar dengan memanggil isi dari tabel feature_image --}}
                <img width='412px' height='412px' class="card-img-top img-responsive" src={{$article->feature_image}} style="padding:20px 150px;margin-left:auto;margin-right:auto;">
                <div class="card-body">
                    {{-- pemanggilan judul dengan memanggil isi dari tabel title --}}
                  <h2 class="card-title">{{$article->title}}</h2>
                  {{-- pemanggilan content dengan memanggil isi dari tabel content --}}
                  <p class="card-text">{{substr($article->content,0,500)}} ......</p>
                  {{-- jika diklik read more akan merujuk id sesuai urutan pada seeder yang telah diinputkan --}}
                    <a href="{{url('/article',[$article->id])}}" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    {{-- pemanggilan Date and time dengan memanggil isi dari tabel created_at --}}
                  Posted on {{$article->created_at}}
                </div>
            </div>
            @endforeach
                {{$articles->appends(Request::all())->links()}}
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
