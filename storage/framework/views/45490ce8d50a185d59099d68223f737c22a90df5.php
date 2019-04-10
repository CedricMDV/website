<?php /* /home/cedric/website/resources/views/index.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
	</head>
	<body>
		
			
			<?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<li>

					<a href="/employees/<?php echo e($employee->id); ?>"> <?php echo e($employee->firstname); ?> <?php echo e($employee->lastname); ?>

					</a>
				</li>

					
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>      
					      	<a href="/employees/create"> Créer</a>

		

			<?php endif; ?>
		
			<br/><br/>


            <style>
            	a:link, a:visited {
  				background-color: #3c903c;
  				color: white;
 				 padding: 16px 29px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
   				 margin: 4px 2px;

			}

				a:hover, a:active {
		  		background-color: green;
			}
            </style>















	</body>
</html>