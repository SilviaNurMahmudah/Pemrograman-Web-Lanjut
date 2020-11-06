@extends('layouts.master')

@section('judul','Article Details')

@section('konten')

<body>

  <div id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">
      <div class="section-title">
        <h2>Article</h2>
        <p>{{$Article->title}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{$Article->imageUrl}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$Article->title}} </h3>
          <p class="font-italic">
            {{$Article->content}}
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

  </div><!-- End About Section -->
  <br><br>
</body>
@endsection