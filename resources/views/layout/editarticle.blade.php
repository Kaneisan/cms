@extends('template')
@section('title', 'Manage')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Data Article</h1>
      <p class="lead" style="color:white" >Manage Edit Data Article</p>
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
            <form action="/manage/update/{{$article->id}}" method="POST"
                enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$article->id}}"><br>
                <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control"
               required="required" name="title" value="{{$article->title}}"><br>
                </div>
                <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control"
               required="required" name="content" value="{{$article->content}}"><br>
                </div>
                <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="file" class="form-control"
               required="required" name="image" value="{{$article->feature_image}}"><br>
               <img width="150px" src="{{asset('storage/'.$article->feature_image)}}">

                </div>
                <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
