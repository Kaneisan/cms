@extends('template')
@section('title', 'Manage')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset

('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Data User</h1>
      <p class="lead" style="color:white" >Manage data user</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection

@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-40 mx-auto">
            <table class="table table-bordered table-striped">
                <a href="manageuser/add" class="btn btn-primary">Tambah Data</a>
                <button type="button" class="btn btn-info"><a href="/manageuser/cetak_pdf" target="_blank" class="badge badgedanger">Cetak PDF</a></button></td>
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Nama</th>
                        <th style="text-align:center">Email</th>
                        <th style="text-align:center">Roles</th>
                        <th style="text-align:center">Profile</th>
                        <th style="text-align:center" colspan="2">Fitur</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $a)
                    <tr>
                        <td style="text-align:center">{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->roles}}</td>
                        <td><img width="100px" src="{{asset('storage/'.$a->profile)}}"></td>
                        <td style="text-align:center"><button type="button" class="btn btn-primary"><a href="manageuser/edit/{{ $a->id }}" class="badge badgewarning">Edit</a></button></td>
                        <td style="text-align:center"><button type="button" class="btn btn-danger"><a href="manageuser/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a></button></td>
                    </tr>
                @endforeach

                </tbody>
               </table>
               {{-- {{$users->appends(Request::all())->links()}} --}}
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection
