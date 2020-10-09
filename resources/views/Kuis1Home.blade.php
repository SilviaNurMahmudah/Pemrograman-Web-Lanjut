@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="kuis1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="kuis1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="kuis1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="kuis1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="kuis1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="kuis1/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="kuis1/style.css" rel="stylesheet">

</head>

<body>
@section('content')

  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">
      <h1>Silvia Nur Mahmudah</h1>
      <h2>Welcome to <span>  My Website</span></h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="KuisAbout">About</a></li>
          <li><a href="KuisContact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

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
              <p>{{$ar->content}}</p> <!-- ini content -->
              <div class="portfolio-links">
                <a href="{{$ar->imageUrl}}" data-gall="portfolioGallery" class="venobox" title="image {{$ar->id}}"><i class="bx bx-plus"></i></a>
                <a href="KuisArticle/{{$ar->id}}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Read More..."><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div><!-- End Artikel -->

  <div id="contact" class="contact">'
    <div class="container">
      <form class="php-email-form mt-4">

        <div class="form-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>

        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>

        <div class="text-center"><button type="submit">Send Comment</button></div>
      </form>
    </div>
  </div>
@endsection

<div class="credits">
    <p>Copyright &copy; Silvia's Website 2020</p>
</div>

</html>