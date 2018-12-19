<?php $__env->startSection('content'); ?>
<body>
    <div id="app">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" align="center"><span class="Poly">PolyMath</span></a>
            </div>


  
        <main class="py-4">
            <div class="row">
                <p class="card-header">Log In</p>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                <label for="email" class="col-sm-4 col-form-label text-md-right"></label>

                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email">
                        <div class="col-md-6">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                        <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password"><br>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>

                <button type="submit" class="btn btn-primary">
                    Log In
                </button><br>
                <div class="btn-link">

                    <a href="<?php echo e(route('password.request')); ?>">

                        Forgot Password?
                    </a>
                </div>
                </form>
            </div>
        </main>
    </div>
</body>
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>