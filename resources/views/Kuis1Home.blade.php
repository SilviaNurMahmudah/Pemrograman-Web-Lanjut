@extends('layouts.master')

@section('judul','Home')

@section('konten')

    <!-- ======= artikel ======= -->
  <div id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Article</h2>
        <p>My Article</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        @foreach($Article as $ar)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{$ar->imageUrl}}" class="img-fluid" alt="Card image cap">
            <div class="portfolio-info">
              <!-- <h4>Artikel {{$ar->id}}</h4> -->
              <h4>{{$ar->title}}</h4><br> <!-- ini judul -->
              <p>{{Str::limit($ar->content, 400, '...')}}</p> <!-- ini content -->
              <div class="portfolio-links">
                <a href="{{$ar->imageUrl}}" data-gall="portfolioGallery" class="venobox" title="image {{$ar->id}}"><i class="bx bx-plus"></i></a>
                <a href="KuisArticle{{$ar->id}}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Read More..."><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div><!-- End Artikel -->

  <div id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Add Comment</h2>
      </div>
      <form class="php-email-form mt-4" action="/reaction/create" method="post">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>

        <div class="form-group">
          <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>

        <div class="text-center"><button type="submit" name ="add">Send Comment</button></div>
      </form>
    </div>
  </div>
  <br><br>
@endsection