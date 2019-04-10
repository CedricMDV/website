<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
</head>
<body>

<form action="{{ route('files.update', $file->id) }}" method="post" enctype="multipart/form-data" >
        @csrf 
        @method('PATCH')

		@foreach($variables as $i => $variable)
			
				{{$variable}} <input type="text" name="config" value="valeur-{{$i}}" required>
			

		@endforeach

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>

</body>
</html>