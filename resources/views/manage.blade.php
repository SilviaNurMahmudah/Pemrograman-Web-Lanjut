<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage</title>
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

<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

      <h1>Silvia Nur Mahmudah</h1>
      <h2>I'm single, <span>I'm very happy</span></h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="KuisAbout">About</a></li>
          <li><a href="KuisContact">Contact</a></li>
          <li class="active"><a href="#header">Manage</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Manage</h2>
        <p>Manage My Article</p>
      </div>

      <a href="/articleadd"  class="btn btn-primary">Tambah Data</a>

      <br><br>
      
      <!-- manage article -->
      <div class="row">
        @foreach($article as $a)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$a->id}}.{{$a->title}}</h4>
            <p><em>{{$a->created_at}}</em></p>
            <h5><a href="/articleedit{{ $a->id }}" class="badge badgedanger">Edit</a></h5>
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

      <!-- manage article -->
      <div class="row">
        @foreach($reaction as $r)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$r->name}}</h4>
            <p><em>{{$r->created_at}}</em></p>
            <h5><a href="reaction/delete/{{ $r->id }}" class="badge badgedanger">Hapus</a></h5>
            <br><br>
          </div>
        </div>
        @endforeach  
      </div>
    </div>
  </div>
  <br><br>
</header>

</body>

<div class="credits">
  <p>Copyright &copy; Silvia's Website 2020</p>
</div>

</html>