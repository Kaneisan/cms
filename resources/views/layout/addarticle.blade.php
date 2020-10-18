@extends('template')
@section('title', 'AddArticle')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Add Article</h1>
      <p class="lead" style="color:white" >Manage data article</p>
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
            <form action="/manage/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control"
               required="required" name="title"><br>
                </div>
                <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control"
               required="required" name="content"><br>
                </div>
                <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="text" class="form-control"
               required="required" name="feature_image"><br>
                </div>
                <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
