@extends('layouts.master')

@section('judul','Manage')

@section('konten')

<body>
  <div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <p>Manage My Users</p>
      </div>
      <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a><br><br>

      <!-- manage user -->
      <div class="row">
        @foreach($user as $u)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$u->name}}</h4>
            <p><em>{{$u->email}}</em></p>
            <img width="80px" src="{{asset('storage/'.$u->profilUrl)}}"><br><br>
            <h5><a href="/user/edit/{{ $u->id }}" class="badge badgedanger">Edit</a></h5>
            <h5><a href="/user/delete/{{ $u->id }}" class="badge badgedanger">Hapus</a></h5>
            <br><br>
          </div>
        </div>
        @endforeach  
      </div>
      <br><br>
          
    </div>
  </div>
  <br><br>

</body>
@endsection