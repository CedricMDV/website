<?php /* /home/cedric/website/resources/views/employe.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employé</title>
	</head>
	<body>
			<form action="<?php echo e(url('employe')); ?>" method="post" >
			<?php echo e(csrf_field()); ?>

				<label for="firstname"> Prénom :</label>
				<input type="text" name="firstname" required><br/><br/>
				

				<label for="lastname"> Nom :</label>
                <input type="text" name="lastname" required><br/><br/>                    

				<input type="submit" value="envoyer">


			

			</form>

















	</body>
</html>