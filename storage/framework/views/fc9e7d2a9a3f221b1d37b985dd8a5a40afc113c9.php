<?php /* /home/cedric/website/resources/views/edit_file.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
</head>
<body>

<form action="<?php echo e(route('files.update', $file->id)); ?>" method="post" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PATCH'); ?>

		<?php $__currentLoopData = $variables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
				<?php echo e($variable); ?> <input type="text" name="config" value="valeur-<?php echo e($i); ?>" required>
			

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>

</body>
</html>