<?php /* /home/cedric/website/resources/views/show_file.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><?php echo e($file->name); ?> <?php echo e($file->filepath); ?></h1>

	<p>
		<a href="/files/<?php echo e($file->id); ?>/edit"> Modifier</a>
	</p>

	
	



</body>
</html>