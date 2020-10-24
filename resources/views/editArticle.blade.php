<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Article</title>
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
<br><br>

<!-- ======= Resume Section ======= -->
  <div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Edit Article</h2>
      </div>
      
    </div>
  </div><!-- End Resume Section -->
  <br><br>
</body> 


<div id="contact" class="contact">'
    <div class="container">
        <form class="php-email-form mt-4" action="/article/update/{{$article->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$article->id}}"></br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" class="form-control" required="required" name="image" value="{{$article->imageUrl}}"></br>
        </div>
        <div class="text-center"><button type="submit" name="edit">Ubah Data</button></div>
        </form>
    </div>
</div>

  <div class="credits">
    <p>Copyright &copy; Silvia's Website 2020</p>
  </div>

</html>