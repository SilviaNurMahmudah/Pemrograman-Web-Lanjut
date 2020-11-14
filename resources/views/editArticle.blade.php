@extends('layouts.master')

@section('judul','Edit Article')

@section('konten')

<body>
<br>
  <div>
    <div class="container">

      <div class="section-title">
        <h2>Edit Article</h2>
      </div>
      
    </div>
  </div>
<br>


<div id="contact" class="contact">
    <div class="container">
        <form class="php-email-form mt-4" action="/article/update/{{$article->id}}" method="post" enctype="multipart/form-data">
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
            <label for="image">Image</label>
            <input type="file" class="form-control" required="required" name="image" value="{{$article->imageUrl}}"></br>
        </div>
        <div>
            <img src="{{asset('storage/'.$article->imageUrl)}}">
        </div>
        <div class="text-center"><button type="submit" name="edit">Ubah Data</button></div>
        </form>
    </div>
</div>
</body>
@endsection