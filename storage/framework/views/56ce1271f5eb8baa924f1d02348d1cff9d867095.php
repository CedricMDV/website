<?php /* /home/cedric/work/website/resources/views/edit_file.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
	<link type="text/css" rel="stylesheet" href=<?php echo e(asset('css/materialize.css')); ?>  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet">
</head>
<body>
<div class="container">
<form action="<?php echo e(route('files.update', $file->id)); ?>" method="post" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?> 
		<?php echo method_field('PATCH'); ?>
		
		<h1>Edit file<i class="medium material-icons">settings</i></h1> 
		<?php $__currentLoopData = $variables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row">
				<div class="input-field col s12">
						<?php echo e($variable); ?>

						<input type="text" name="config[<?php echo e($variable); ?>]" value="valeur-<?php echo e($i); ?>" required>
				</div>
		</div> 
			

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>
</div>
	
</body>
</html>