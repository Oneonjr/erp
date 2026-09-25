<!doctype html>
<html lang="<?php echo e(__('config.html_language')); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="robots" content="noindex, nofollow, noarchive, noodp, NoImageIndex, noydir">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!--
    (AUTH)
    If the base href URL begins with "http://" but you are sure it should start with "https://",
    please visit the following page: https://bit.ly/FF3-broken-base-href
    -->
    <base href="<?php echo e(route('index', null, true)); ?>/">
    <title><?php echo e(__('firefly.login_page_title')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)"/>
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)"/>
    <meta name="color-scheme" content="light dark">
    <?php echo app('Illuminate\Foundation\Vite')(['sass/app.scss']); ?>
    <?php if (isset($component)) { $__componentOriginal228c38581d0d2737d30b09e4e9c81be4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal228c38581d0d2737d30b09e4e9c81be4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.fav-icons-clean','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.fav-icons-clean'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal228c38581d0d2737d30b09e4e9c81be4)): ?>
<?php $attributes = $__attributesOriginal228c38581d0d2737d30b09e4e9c81be4; ?>
<?php unset($__attributesOriginal228c38581d0d2737d30b09e4e9c81be4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal228c38581d0d2737d30b09e4e9c81be4)): ?>
<?php $component = $__componentOriginal228c38581d0d2737d30b09e4e9c81be4; ?>
<?php unset($__componentOriginal228c38581d0d2737d30b09e4e9c81be4); ?>
<?php endif; ?>
    <script nonce="<?php echo e($JS_NONCE); ?>">
        (() => {
            'use strict'
            document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
        })()
    </script>
</head>
<body class="login-page bg-body-secondary">
<div class="login-box">
    <div class="login-logo">
        <?php if(true=== ($IS_DEMO_SITE ?? false)): ?>
            <img src="images/logo-session.png" width="68" height="100" alt="Logo" title="Logo"/><br>
            <a href="<?php echo e(route('index', null, true)); ?>"><strong>Firefly</strong> III</a>
        <?php endif; ?>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo app('Illuminate\Foundation\Vite')(['js/pages/blank.js']); ?>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/layout/v3/auth.blade.php ENDPATH**/ ?>