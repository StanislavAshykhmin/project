<?php if(session('message')): ?>
    <div class="alert alert-light" style="text-align: center;">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>