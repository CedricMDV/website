<?php /* /home/cedric/work/website/resources/views/index_file.blade.php */ ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
		<link type="text/css" rel="stylesheet" href=<?php echo e(asset('css/materialize.css')); ?>  media="screen,projection"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet">
	</head>
	<body>

			<ul id="slide-out" class="sidenav sidenav-fixed">
					<li><a href="#!">First Sidebar Link</a></li>
					<li>	<a href="/files/create" class="waves-effect light-green accent-4 btn-small"> Créer</a>
					</li>
				  </ul>
				  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

		<header>
			<div class="container">
				<div class="nav-wrapper">
					<div class="row">
						<div class="col s12 m10 offset-m1">
							<h1 class="header"><i class="medium material-icons">folder</i>Fichiers </h1>
						</div>
					</div>
				</div>
			</div>
		</header>
		
			
			<?php $__empty_1 = true; $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<div class="container">	
		<!--	<div class="collection"> -->

				<!--	<a href="/files/<?php echo e($file->id); ?>"  class="collection-item"> <?php echo e($file->name); ?> 
					</a>-->
					<ul class="collection with-header">
						<li class="collection-item"><div><?php echo e($file->name); ?> <a href="/files/<?php echo e($file->id); ?>/edit" class="secondary-content"><i class="material-icons">settings</i></a>
							
							<!--<a href="/files/<?php echo e($file->id); ?>" class="secondary-content"><i class="material-icons">file_download</i></a></div>-->
							<form action="<?php echo e(route('files.destroy', $file->id)); ?>" method="post">
								<?php echo csrf_field(); ?>
								<?php echo method_field('DELETE'); ?>
								<button type="submit" class="waves-effect waves-light btn-small">Download</button>
								</form>
							</div>
							

						</li>
					</ul>

					
            <!--</div>-->
		</div>
					
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>      
					      	<a href="/files/create"> Créer</a>

		

			<?php endif; ?>

							



			<br/><br/>


		













			<script type="text/javascript" src="js/materialize.min.js"></script>

	</body>
</html>