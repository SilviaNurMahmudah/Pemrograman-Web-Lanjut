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
        <p style="color:#999999">My Users</p>
      </div>

      <br><br>
      
      <!-- manage article -->
      <div class="row">
      
        @foreach($user as $u)
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>{{$u->name}}</h4>
            <h5 style="color:#000000">{{$u->email}}</h5>
            <h6 style="color:#000000">{{$u->profilUrl}}</h6>
            <p><em style="color:#999999">{{$u->created_at}}</em></p>
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