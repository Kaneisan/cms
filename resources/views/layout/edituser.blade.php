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
            <form action="/manageuser/update/{{$users->id}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$users->id}}"><br>
                <div class="form-group">
                <label for="title">Nama</label>
                <input type="name" class="form-control"
               required="required" name="name" value="{{$users->name}}"><br>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control"
               required="required" name="email" value="{{$users->email}}"><br>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control"
               required="required" name="password" value="{{$users->password}}"><br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" class="form-control"
                    required="required" name="roles" value="{{$users->roles}}"><br>
                    </div>
                <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
