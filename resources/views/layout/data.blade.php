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
        <h1 class="modal-title" id="exampleModalLabel" style="margin-left:auto;margin-right:auto;">Modal title</h1>
        <div class="col-lg-12 mx-auto">
        <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">NIS</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fitur</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $siswa)
              <tr>
                <th scope="row">{{$siswa->id}}</th>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->nama_belakang }}</td>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->alamat}}</td>
              <td><a href="/data/{{$siswa->id}}/edit"><button type="button" class="btn btn-warning btn-sm">Edit</button></a></td>
                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Tambah
                        </button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/data/create" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Nama Depan</label>
                                          <input name="nama_depan" type="tex" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Belakang</label>
                                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NIS</label>
                                            <input name="nis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIS">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                                          </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    <td><a href="/data/{{$siswa->id}}/delete"><button type="button" class="btn btn-secondary btn-sm">Hapus</button></a><td>
                @endforeach
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
