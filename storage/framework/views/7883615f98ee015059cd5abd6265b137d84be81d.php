<?php /* /home/cedric/website/resources/views/inscription.blade.php */ ?>
<?php $__env->startSection('title','inscription'); ?>

<?php $__env->startSection('contenu'); ?>
	<form action="/inscription" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Mot de passe">
		<input type="password" name="password_confirmation" placeholder="Mot de passe(confirmation) ">
		<input type="submit" value="M'inscrire">

	</form>

	<style>
		input{

			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			transition: 0,5s;
			outline: none;
			border-radius:4px;

		}

	</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>