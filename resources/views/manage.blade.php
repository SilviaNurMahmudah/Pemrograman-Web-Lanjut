@extends('layouts.master')

@section('judul','Manage')

@section('konten')

<body>
  <div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Manage</h2>
        <p>Manage My Article</p>
      </div>

      <a href="/article/add"  class="btn btn-primary">Tambah Data</a>
      <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>

      <br><br>
      
      <!-- manage article -->
      <div class="row">
        @foreach($article as $a)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$a->id}}.{{$a->title}}</h4>
            <p><em>{{$a->created_at}}</em></p>
            <h5><a href="/article/edit/{{ $a->id }}" class="badge badgedanger">Edit</a></h5>
            <h5><a href="/article/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a></h5>
            <br><br>
          </div>
        </div>
        @endforeach  
      </div>
      <br><br>

      <div class="section-title">
        <p>Manage My Reaction</p>
      </div>
      <a href="/reaction/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
      <br><br>

      <!-- manage reaction -->
      <div class="row">
        @foreach($reaction as $r)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$r->name}}</h4>
            <p><em>{{$r->created_at}}</em></p>
            <h5><a href="/reaction/delete/{{ $r->id }}" class="badge badgedanger">Hapus</a></h5>
            <br><br>
          </div>
        </div>
        @endforeach  
      </div>
      <br><br>

      <div class="section-title">
        <p>Manage My Users</p>
      </div>
      <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>

      <!-- manage user -->
      
    </div>
  </div>
  <br><br>

</body>
@endsection