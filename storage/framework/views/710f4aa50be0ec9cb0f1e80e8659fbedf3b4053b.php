<?php /* /home/cedric/website/resources/views/file_form.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>formulaire fichier</title>
	</head>
	<body>
			<form action="<?php echo e(url('/parse')); ?>" method="post" enctype="multipart/form-data" >
			<?php echo e(csrf_field()); ?>

				<input type="file" name="filedoc" accept=".txt" required>
				
				<input type="submit" value="envoyer">


			

			</form>

















	</body>
</html>