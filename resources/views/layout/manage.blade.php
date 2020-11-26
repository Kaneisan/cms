@extends('template')
@section('title', 'Manage')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Data Article</h1>
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
            <table class="table table-bordered table-striped">
                <a href="manage/add" class="btn btn-primary">Tambah Data</a>
                <button type="button" class="btn btn-info"><a href="/manage/cetak_pdf" target="_blank" class="badge badgedanger">Cetak PDF</a></button></td>
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Judul</th>
                        <th style="text-align:center">Tanggal</th>
                        <th style="text-align:center" colspan="2">Fitur</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($articles as $a)
                    <tr>
                        <td style="text-align:center">{{$a->id}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{$a->updated_at}}</td>
                        <td style="text-align:center"><button type="button" class="btn btn-primary"><a href="manage/edit/{{ $a->id }}" target="_blank" class="badge badgewarning">Edit</a></button></td>
                        <td style="text-align:center"><button type="button" class="btn btn-danger"><a href="manage/delete/{{ $a->id }}" target="_blank" class="badge badgedanger">Hapus</a></button></td>

                    </tr>
                @endforeach

                </tbody>
               </table>
               {{$articles->appends(Request::all())->links()}}
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
