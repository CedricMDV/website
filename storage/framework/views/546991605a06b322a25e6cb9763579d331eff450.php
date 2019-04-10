<?php /* /home/cedric/website/resources/views/create_file.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>formulaire fichier</title>
	</head>
	<body>
			<form action="<?php echo e(route('files.store')); ?>" method="post" enctype="multipart/form-data" >
			 <?php echo csrf_field(); ?>

			    <label for="name"> Nom</label>

			    <input type="text" name="name" required>

				<input type="file" name="filepath" accept=".txt" required>
				
				<input type="submit" value="envoyer">


			

			</form>

















	</body>
</html>