<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Article</title>
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

  <div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Add Article</h2>
      </div>
      
    </div>
  </div>
  <br><br>
</body> 


<div id="contact" class="contact">'
    <div class="container">
      <form class="php-email-form mt-4" action="/article/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content"></br>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" class="form-control" required="required" name="image"></br>
        </div>

        <div class="text-center"><button type="submit" name="add">Tambah Data</button></div>
      </form>
    </div>
</div>

  <div class="credits">
    <p>Copyright &copy; Silvia's Website 2020</p>
  </div>

</html>