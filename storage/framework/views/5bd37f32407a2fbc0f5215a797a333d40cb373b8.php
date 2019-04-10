<?php /* /home/cedric/website/resources/views/variables_form.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
</head>
<body>

<form action="<?php echo e(url('/replace')); ?>" method="post" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?>
		<?php $__currentLoopData = $variables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
				<?php echo e($variable); ?> <input type="text" name="variable-<?php echo e($i); ?>" value="valeur-<?php echo e($i); ?>" required>
			

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>

</body>
</html>