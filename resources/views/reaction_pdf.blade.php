<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF</title>
    
    <!-- Template Main CSS File -->
    <link href="kuis1/style.css" rel="stylesheet">

</head>
<body>
<div id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Membuat Laporan PDF Dengan DOMPDF Laravel</h2>
        <p style="color:#999999">My Article</p>
      </div>

      <br><br>
      
      <!-- manage article -->
      <div class="row">
      
        @foreach($reaction as $r)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$r->name}}</h4>
            <h5 style="color:#000000">{{$r->content}}</h5>6>
            <p><em style="color:#999999">{{$r->created_at}}</em></p>
            <br><br>
          </div>
        </div>
        @endforeach  
      </div>
      <br><br>
    </div>
</div>
<br><br>
</body>
</html>