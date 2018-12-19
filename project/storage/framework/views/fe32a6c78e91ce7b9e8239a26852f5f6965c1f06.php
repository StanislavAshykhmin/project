<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldPushContent('styles'); ?>

</head>
<body>
<?php echo $__env->make('layouts.header-tree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('dashboard.notifications.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<div id="toTop">&#8657;</div>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
