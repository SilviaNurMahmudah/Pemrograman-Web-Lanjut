<!DOCTYPE html>
<html>
	<head>
 		<title>Web Coba-Coba</title>
 	</head>
 	<body>
		<header>
			<h2>Blog Coba-Coba</h2>

			<nav>
				<a href="/home">HOME</a>
				<a href="/about">ABOUT</a>
				<a href="/articles/20">ARTICLE</a>
			</nav>
		</header>
		<br><br>
 		@section('sidebar')
 		ini adalah master sidebar
 		@show
 		<br><br>
 		@yield('judul')
 		<br>
 		@yield('konten')
 		<br><br>

 		<footer><a href="https://instagram.com/silvia.s20?igshid=1wbrzo2t6hl1z">ini footer</a></footer>
 	</body>
</html>
