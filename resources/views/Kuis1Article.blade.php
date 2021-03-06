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
  <link href="kuis1/style.css" rel="stylesheet">

<body>

  <main id="main">
  <br><br>
  <div id="about" class="about">
    <div class="about-me container">
      <div class="section-title">
      <h2>Detail Article</h2>
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

  </div>
  <br><br>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="kuis1/vendor/jquery/jquery.min.js"></script>
  <script src="kuis1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="kuis1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="kuis1/vendor/php-email-form/validate.js"></script>
  <script src="kuis1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="kuis1/vendor/counterup/counterup.min.js"></script>
  <script src="kuis1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="kuis1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="kuis1/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="kuis1/js/main.js"></script>

</body>

</html>