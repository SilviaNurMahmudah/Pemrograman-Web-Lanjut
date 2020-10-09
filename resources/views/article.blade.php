<!-- <html>
	<body>
		<h1>Halaman Artikel dengan Id {{ $Id }}</h1>
	</body>
</html> -->

@extends('layouts.parent')

@section('judul','Halaman Artikel')
@section('konten')
	<p>Ini adalah halaman artikel dengan Id {{ $Id }}</p>
@endsection