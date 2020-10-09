

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		@foreach($Article as $articles)
			<li>Id : {{$articles -> id}}</li>
			<li>Title : {{$articles -> title}}</li>
			<li>Content : {{$articles -> content}}</li>
			<li>featured_image : {{$articles -> featured_image}}</li>
		@endforeach
	</table>
</body>
</html>

