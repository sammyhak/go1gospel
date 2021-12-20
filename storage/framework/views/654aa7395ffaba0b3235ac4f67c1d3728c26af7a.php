<?php /** @var App\Services\Meta\MetaTags $meta */ ?>

<?php $__env->startSection('body'); ?>
    <h1><?php echo e($meta->getTitle()); ?></h1>

    <p><?php echo e($meta->getDescription()); ?></p>

    <ul>
        <li>
            <a href="<?php echo e(url('new-releases')); ?>"><?php echo e(__('New Releases')); ?></a>
            <a href="<?php echo e(url('popular-genres')); ?>"><?php echo e((__('Popular Genres'))); ?></a>
            <a href="<?php echo e(url('popular-albums')); ?>"><?php echo e(__('Popular Albums')); ?></a>
            <a href="<?php echo e(url('top-50')); ?>"><?php echo e(__('Top 50')); ?></a>
        </li>
    </ul>

    <?php if($meta->getData('genres')): ?>
        <ul class="genres">
            <?php $__currentLoopData = $meta->getData('genres'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <figure>
                        <img src="<?php echo e($genre['image']); ?>">
                        <figcaption><a href="<?php echo e($meta->urls->genre($genre)); ?>"><?php echo e($genre['name']); ?></a></figcaption>
                    </figure>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::prerender.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/go1gospel/public_html/resources/views/prerender/home/show.blade.php ENDPATH**/ ?>