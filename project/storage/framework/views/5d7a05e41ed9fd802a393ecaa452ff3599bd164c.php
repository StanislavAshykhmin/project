<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startPush('styles'); ?>
    <?php echo $__env->make('dashboard.styles.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
    <div class="row align-items-center text">
        <div class="col-4 col-lg-1 text-left test">
            <p>Photo</p>
        </div>
        <div class="col-8 col-lg-10 text-left test">
            <p>Main info</p>
        </div>
    </div>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row align-items-center text">
            <div class="col-2 col-lg-1 text-left test1">
                <img class="img" src="<?php echo e(asset('storage/'.$user->photo)); ?>" alt="">
            </div>
            <div class=" col-8 col-lg-9 test1">
                <p class="name"><a href="<?php echo e(route('user', ['id' => $user->id])); ?>"><?php echo e($user->name); ?></a> (<?php if($user->sex == 'male'): ?><i class="fas fa-mars"></i><?php else: ?><i class="fas fa-venus"></i><?php endif; ?>  age <?php echo e($user->age()); ?>)</p>
                <p><?php echo e($user->email); ?> &nbsp <?php echo e($user->phone); ?> &nbsp <?php echo e($user->address); ?></p>
            </div>
            <div class="col-2 col-lg-1 text-center test2 enter-update " data-id="<?php echo e($user->id); ?>">
                <a class="edit-button link3 edit-contact" data-url="<?php echo e(route('ajax-contact', ['id' => $user->id])); ?>" href=""><i class="fas fa-user-edit fa-2x"></i></a>
            </div>
            
            
            
            
            
            
            <button class="dagger btn-light" data-toggle="modal" data-target="#delete-<?php echo e($user->id); ?>">&times;</button>
            <div class="modal fade" id="delete-<?php echo e($user->id); ?>" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Удалить</h4>
                        </div>
                        <div class="modal-body">
                            <form  action="<?php echo e(route('delete', ['id' => $user->id])); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button class="btn btn-danger" style="opacity: .5;">Удалить</button>
                                <button type="button" class="btn btn-light m-t-10" data-dismiss="modal">Закрыть</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <ul class="pagination" style="border: #1f648b;">
        <?php echo e($users->links()); ?>

    </ul>
    <div class="button_open_popup">
        <button class="button_add_users enter">
            <span class="open"></span>
        </button>
    </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('dashboard.scripts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>