@extends('layouts.master')

@section('judul','Add Article')

@section('konten')

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
</body>
@endsection