<?php /* /home/cedric/website/resources/views/welcome.blade.php */ ?>
<?php $__env->startSection('contenu'); ?>

    <div class="title m-b-md">
        WebSite
    </div>
<?php $__env->stopSection(); ?>

                
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>