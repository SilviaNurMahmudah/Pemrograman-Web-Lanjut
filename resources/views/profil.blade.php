@extends('layouts.master')

@section('judul','Edit User')

@section('konten')

<body>

  <main id="main">
  <br><br>
  <div id="about" class="about">
    <div class="about-me container">
      <div class="section-title">
      <h2>Profile</h2>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        
      </div>
    </div>

<div id="contact" class="contact">
    <div class="container">
        <form class="php-email-form mt-4" action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}"></br>
        
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" required="required" name="image" value="{{$user->profilUrl}}"></br>
        </div>
        <div>
            <img width="80px" src="{{asset('storage/'.$user->profilUrl)}}">
        </div>
        <div class="text-center"><button type="submit" name="edit">Ubah Data</button></div>
        </form>
    </div>
</div>

  </div>
  <br><br>

  </main><!-- End #main -->
</body>
@endsection