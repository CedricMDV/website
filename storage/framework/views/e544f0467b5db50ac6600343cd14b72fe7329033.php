<?php /* /home/cedric/website/resources/views/index_file.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
	</head>
	<body>
		
			
			<?php $__empty_1 = true; $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<li>

					<a href="/files/<?php echo e($file->id); ?>"> <?php echo e($file->name); ?> <?php echo e($file->filepath); ?>

					</a>
				</li>





					
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>      
					      	<a href="/files/create"> Créer</a>

		

			<?php endif; ?>

							
								      	<a href="/files/create"> Créer</a>



			<br/><br/>


          














	</body>
</html>