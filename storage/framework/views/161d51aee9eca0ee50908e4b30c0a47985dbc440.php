<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="google" content="notranslate">
        <base href="<?php echo e($htmlBaseUri); ?>">

        <?php echo $__env->make('common::prerender.meta-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <?php echo $__env->yieldContent('body'); ?>
    </body>
</html>
<?php /**PATH /home/go1gospel/public_html/common/resources/views/prerender/base.blade.php ENDPATH**/ ?>