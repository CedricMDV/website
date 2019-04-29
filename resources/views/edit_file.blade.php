<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
	<link type="text/css" rel="stylesheet" href={{ asset('css/materialize.css') }}  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet">
</head>
<body>
<div class="container">
<form action="{{ route('files.update', $file->id) }}" method="post" enctype="multipart/form-data" >
        @csrf 
		@method('PATCH')
		
		<h1>Edit file<i class="medium material-icons">settings</i></h1> 
		@foreach($variables as $i => $variable)
		<div class="row">
				<div class="input-field col s12">
						{{$variable}}
						<input type="text" name="config[{{$variable}}]" value="valeur-{{$i}}" required>
				</div>
		</div> 
			

		@endforeach

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>
</div>
	
</body>
</html>