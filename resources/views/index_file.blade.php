<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
	</head>
	<body>
		
			
			@forelse($files as $file)
				<li>

					<a href="/files/{{$file->id}}"> {{$file->name }} {{ $file->filepath}}
					</a>
				</li>





					
		    @empty      
					      	<a href="/files/create"> Créer</a>

		

			@endforelse

							
								      	<a href="/files/create"> Créer</a>



			<br/><br/>


          














	</body>
</html>