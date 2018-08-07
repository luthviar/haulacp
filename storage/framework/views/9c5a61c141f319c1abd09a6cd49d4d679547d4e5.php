<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body id="body">
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
