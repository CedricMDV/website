<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
	</head>
	<body>
		
			
			@forelse($employees as $employee)
				<li>

					<a href="/employees/{{$employee->id}}"> {{$employee->firstname }} {{ $employee->lastname}}
					</a>
				</li>

					
		    @empty      
					      	<a href="/employees/create"> Créer</a>

		

			@endforelse
		
			<br/><br/>


            <style>
            	a:link, a:visited {
  				background-color: #3c903c;
  				color: white;
 				 padding: 16px 29px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
   				 margin: 4px 2px;

			}

				a:hover, a:active {
		  		background-color: green;
			}
            </style>















	</body>
</html>