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
            <form action="/manageuser/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control"
                    required="required" name="name"><br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control"
                    required="required" name="email"><br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" encrypt="sha1" pattern=".{6,}" class="form-control"
                    required="required" name="password"><br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" class="form-control"
                    required="required" name="roles"><br>
                    </div>
                <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
