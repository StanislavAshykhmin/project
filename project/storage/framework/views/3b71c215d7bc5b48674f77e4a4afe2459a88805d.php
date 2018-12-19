<ul>
    <?php $__currentLoopData = $childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href=""><?php echo e($children-> name); ?></a>
                                <?php if(count($children->children)): ?>
                                <?php echo $__env->make('dashboard.tree.reqursive-tree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php endif; ?>

                        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>