@extends('template')
@section('title', $page)
@section('intro-header')
<div class="container">
    @if(session('sukses'))
        <div class="alert alert-dark" role="alert">
            {{session('sukses')}}
        </div>
    @endif
</div>
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Data</h1>
      <p class="lead" style="color:white" >Edit Data diri</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection

@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
            <form action="/data/{{$siswa->id}}/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" type="tex" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIS</label>
                    <input name="nis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIS" value="{{$siswa->nis}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat">{{$siswa->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
