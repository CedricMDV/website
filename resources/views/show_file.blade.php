<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<link type="text/css" rel="stylesheet" href={{ asset('css/materialize.css') }}  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<h2>{{$file->name}}</h2>

	

	<form action="{{ route('files.destroy', $file->id)}}" method="post">
		@csrf
		@method('DELETE')
		<button type="submit" class="waves-effect waves-light btn-small">Download</button>
	  </form>
	</div>

	  

</body>
</html>