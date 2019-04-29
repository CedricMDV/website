<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>formulaire fichier</title>
		<link type="text/css" rel="stylesheet" href={{ asset('css/materialize.css') }}  media="screen,projection"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data" >
			 @csrf

			 <h1> <i class="medium material-icons">cloud_upload</i>Upload file
			 </h1> 

			    <label for="name"> Nom</label>

			    <input type="text" name="name" required>

				<div class="file-field input-field">
					<div class="btn">
					  <span>File</span>
					  <input type="file" name="filepath" accept=".zip" required>
					</div>
					<div class="file-path-wrapper">
					  <input class="file-path validate" type="text">
					</div>
				  </div>
				<!--<input type="file" name="filepath" accept=".zip" required>-->
				
				<!--<input type="submit" value="envoyer">-->
			<div class="center-align">
				<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>			

				
			

			</form>
		</div>















	</body>
</html>