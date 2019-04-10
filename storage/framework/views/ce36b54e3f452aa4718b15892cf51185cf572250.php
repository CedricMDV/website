<?php /* /home/cedric/website/resources/views/tableau.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>tableau document</title>
</head>
<body>

<form action="<?php echo e(route('documents.update')); ?>" method="post" enctype="multipart/form-data" >
				 <?php echo method_field('PATCH'); ?>
        		 <?php echo csrf_field(); ?>
		<?php $__currentLoopData = $variables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
				<?php echo e($variable); ?> <input type="text" name="filedoc" accept=".txt" required>
			

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						        <input type="submit" class="btn btn-primary" value="Modifier">
	</form>

</body>
</html>