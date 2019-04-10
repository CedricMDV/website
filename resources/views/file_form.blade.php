<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>formulaire fichier</title>
	</head>
	<body>
			<form action="{{ url('/parse') }}" method="post" enctype="multipart/form-data" >
			{{csrf_field() }}
				<input type="file" name="filedoc" accept=".txt" required>
				
				<input type="submit" value="envoyer">


			

			</form>

















	</body>
</html>