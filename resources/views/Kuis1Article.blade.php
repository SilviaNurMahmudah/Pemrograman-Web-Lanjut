<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Article Details</title>
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
  <link href="kuis1/css/style.css" rel="stylesheet">

</head>

<body>

  <main id="main">
  <div id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        @section('title')
        <h2>About</h2>
        <p>{{$article->title}}</p>
        @endsection
      </div>

      @section('content')
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX &amp; Graphic Designer</h3>
          <p class="font-italic">
            {{$articles->content}}
          </p>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>
      @endsection

    </div><!-- End About Me -->

    
  </div><!-- End About Section -->


  </main><!-- End #main -->

  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

</body>

</html>