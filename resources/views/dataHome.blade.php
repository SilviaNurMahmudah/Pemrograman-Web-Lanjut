<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<tr>
			<td>
				ID
				<th>Title</th>
				<th>Content</th>
				<th>featured_image</th>
			</td>
		</tr>
		@foreach($Article as $articles)
		<tr>
			<td>{{$articles -> id}}</td>
			<td>{{$articles -> title}}</td>
			<td>{{$articles -> content}}</td>
			<td>{{$articles -> featured_image}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>