@extends('layouts.master')

@section('judul','About')

@section('konten')

<body>
  <div id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="kuis1/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Silvia Nur Mahmudah</h3>
          <p class="font-italic">
            Mahasiswa Politeknik Negeri Malang
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 21 June 2001</li>
                <li><i class="icofont-rounded-right"></i> <strong>NIM:</strong> 1931710054</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +62 857 5523 8045</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Batu, IND</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 19</li>
                <li><i class="icofont-rounded-right"></i> <strong>Class:</strong> MI 2F</li>
                <li><i class="icofont-rounded-right"></i> <strong>Major:</strong> Teknologi Informasi</li>
                <li><i class="icofont-rounded-right"></i> <strong>Hobby:</strong> Swimming</li>
              </ul>
            </div>
          </div>

          <div class="social-links">
            <ul>
              <a href="https://twitter.com/nanoonanoo__?s=20" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="https://www.facebook.com/silvia.nm20" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="https://instagram.com/silvia.s20?igshid=u1higqufauzd" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="https://www.linkedin.com/in/silvia-nur-mahmudah-6679691ab" class="linkedin"><i class="icofont-linkedin"></i></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">232</span>
            <p>Guests Blog</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">9</span>
            <p>Article</p>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">7</span>
            <p>Reaction</p>
          </div>
        </div>

      </div>
    </div><!-- End Counts -->
  
       

    <!-- ======= Services Section ======= -->
  <div id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Reaction</h2>
        <p>Reaction</p>
      </div>

      
      <div class="row">
        @foreach($Reaction as $Re)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">  
          <div class="icon-box">
          
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">{{$Re->name}}</a></h4>
            <p>{{$Re->content}}</p>
          </div>
        </div>
        @endforeach
        <br>
      </div>
     <br><br>
    </div>
  </div><!-- End Services Section -->
  
</div>

</body>
@endsection