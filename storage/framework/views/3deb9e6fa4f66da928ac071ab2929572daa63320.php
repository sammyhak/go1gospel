<!doctype html>
<html lang="<?php echo e($bootstrapData->get('language')); ?>" class="<?php echo e($bootstrapData->getSelectedTheme('name') === 'dark' ? 'be-dark-mode' : 'be-light-mode'); ?>">
    <head>
        <base href="<?php echo e($htmlBaseUri); ?>">

        <?php if(isset($meta)): ?>
            <?php echo $__env->make('common::prerender.meta-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <title class="dst"><?php echo e($settings->get('branding.site_name')); ?></title>
        <?php endif; ?>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="client/favicon/icon-144x144.png">
        <link rel="apple-touch-icon" href="client/favicon/icon-192x192.png">
        <link rel="manifest" href="client/manifest.json">
        <meta name="theme-color" content="<?php echo e($bootstrapData->getSelectedTheme('colors.--be-accent-default')); ?>">

        <style id="be-css-variables">
            :root <?php echo $bootstrapData->getSelectedTheme()->getColorsForCss(); ?>

        </style>

        <?php echo $__env->yieldContent('angular-styles'); ?>

        <?php if(file_exists($customCssPath)): ?>
            <?php if($content = file_get_contents($customCssPath)): ?>
                <style><?php echo $content; ?></style>
            <?php endif; ?>
        <?php endif; ?>

        <?php echo $__env->yieldContent('head-end'); ?>
	</head>

    <body>
        <app-root>
            <?php echo $__env->make('common::spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </app-root>

        <script>
            window.bootstrapData = "<?php echo $bootstrapData->getEncoded(); ?>";
        </script>

        <?php echo $__env->yieldContent('angular-scripts'); ?>

        <?php if(file_exists($customHtmlPath)): ?>
            <?php if($content = file_get_contents($customHtmlPath)): ?>
                <?php echo $content; ?>

            <?php endif; ?>
        <?php endif; ?>

        <?php if($code = $settings->get('analytics.tracking_code')): ?>
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '<?php echo e($settings->get('analytics.tracking_code')); ?>', 'auto');
                ga('send', 'pageview');
            </script>
        <?php endif; ?>

        <noscript>You need to have javascript enabled in order to use <strong><?php echo e(config('app.name')); ?></strong>.</noscript>

        <?php echo $__env->yieldContent('body-end'); ?>
	</body>
</html>
<?php /**PATH /home/go1gospel/public_html/website/common/resources/views/framework.blade.php ENDPATH**/ ?>