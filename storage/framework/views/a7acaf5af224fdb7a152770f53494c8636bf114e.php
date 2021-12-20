<?php $__currentLoopData = $meta->getAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($tag['nodeName'] === 'meta'): ?>
        <meta <?php echo $meta->tagToString($tag); ?> class="dst">
    <?php elseif($tag['nodeName'] === 'link'): ?>
        <link <?php echo $meta->tagToString($tag); ?> class="dst">
    <?php elseif($tag['nodeName'] === 'title'): ?>
        <title class="dst"><?php echo e($tag['_text']); ?></title>
    <?php elseif($tag['nodeName'] === 'script'): ?>
        <script class="dst" type="application/ld+json"><?php echo is_array($tag['_text']) ? json_encode($tag['_text'], JSON_UNESCAPED_SLASHES) : $tag['_text']; ?></script>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/go1gospel/public_html/website/common/resources/views/prerender/meta-tags.blade.php ENDPATH**/ ?>