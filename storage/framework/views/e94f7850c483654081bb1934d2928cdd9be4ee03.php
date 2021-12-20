<?php $__env->startSection('angular-styles'); ?>
    
		<link rel="stylesheet" href="client/styles.9bb809ff9cf5bf4b0c30.css">
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('angular-scripts'); ?>
    
		<script>setTimeout(function() {
        var spinner = document.querySelector('.global-spinner');
        if (spinner) spinner.style.display = 'flex';
    }, 100);</script>
		<script src="client/runtime-es2015.3976989978030e119515.js" type="module"></script>
		<script src="client/runtime-es5.3976989978030e119515.js" nomodule defer></script>
		<script src="client/polyfills-es5.17c10e62de51b5b9d337.js" nomodule defer></script>
		<script src="client/polyfills-es2015.84f0e61e42a8dc9f39a4.js" type="module"></script>
		<script src="client/main-es2015.05597763dcb7290e2f3f.js" type="module"></script>
		<script src="client/main-es5.05597763dcb7290e2f3f.js" nomodule defer></script>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::framework', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/go1gospel/public_html/resources/views/app.blade.php ENDPATH**/ ?>