<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
</head>
<body>

<form action="{{ url('/replace') }}" method="post" enctype="multipart/form-data" >
        @csrf
		@foreach($variables as $i => $variable)
			
				{{$variable}} <input type="text" name="variable-{{$i}}" value="valeur-{{$i}}" required>
			

		@endforeach

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>

</body>
</html>