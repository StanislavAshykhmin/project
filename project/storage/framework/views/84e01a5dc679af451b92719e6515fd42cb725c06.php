<?php $__env->startSection('title', 'Friends'); ?>
<?php $__env->startPush('styles'); ?>
    <?php echo $__env->make('dashboard.styles.styles-tree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="tree">
                    <ul>
                        <li>
                            <a href=""><?php echo e($user->name); ?></a>
                            <ul>
                                <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href=""><?php echo e($friend->name); ?></a>
                                        <?php if(count($friend->children)): ?>
                                            <?php echo $__env->make('dashboard.tree.reqursive-tree', ['id' => $user->id, 'childrens'=>$friend->children], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('dashboard.scripts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard-tree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>