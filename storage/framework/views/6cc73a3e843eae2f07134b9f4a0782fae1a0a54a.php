<?php /* /home/cedric/website/resources/views/create.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employé</title>
	</head>
	<body>
		<div>
			<form action="<?php echo e(route('employees.store')); ?>" method="post" >
			<?php echo e(csrf_field()); ?>

				<label for="firstname"> Prénom :</label>
				<input type="text" name="firstname" required><br/><br/>
				

				<label for="lastname"> Nom :</label>
                <input type="text" name="lastname" required><br/><br/>                    

				<input type="submit" value="Créer">


			

			</form>
		</div>

		<style>
		input[type=text] {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			-webkit-transition: 0.5s;
  			border-radius: 4px;
  			box-sizing: border-box;
  			outline: none;
	}

		input[type=submit] {
  			width: 100%;
  			background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
  			border-radius: 4px;
  			cursor: pointer;
	}

	input[type=submit]:hover {
  		background-color: #45a049;
	}	

	input[type=text]:focus {
 		 border: 3px solid #555;
	}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>



















	</body>
</html>