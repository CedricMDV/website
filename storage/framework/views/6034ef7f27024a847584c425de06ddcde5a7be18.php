<?php /* /home/cedric/website/resources/views/form.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>formulaire fichier</title>
	</head>
	<body>
			<form action="<?php echo e(route('documents.store')); ?>" method="post" enctype="multipart/form-data" >
			<?php echo e(csrf_field()); ?>

				<input type="file" name="filedoc" accept=".txt" required>
				<label>
                    <input type="checkbox" name="header" checked> Header ?                   
                </label>
				<input type="submit" value="envoyer">


			

			</form>

















	</body>
</html>