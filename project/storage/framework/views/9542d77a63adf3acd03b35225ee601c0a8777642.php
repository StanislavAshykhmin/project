<div class="wrap">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class=" col-6 col-lg-3 Users knopka">
                    <img class="logo" src="img/logo.png" alt="Logo site">
                    <a href="<?php echo e(route('home')); ?>">Users</a>
                </div>
                <div class="col-6 col-lg-9 text-right dropdown-button">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-link dropdown-toggle menu-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center text">
                <div class="col-2 col-lg-1 text-left test1">
                    <img class="img" src="<?php echo e(asset('storage/'.$user->photo)); ?>" alt="">
                </div>
                <div class=" col-8 col-lg-9 test1">
                    <p class="name"><?php echo e($user->name); ?></p>
                    <p> <?php echo e($user->birthday); ?>, <?php echo e($user->address); ?> &nbsp &nbsp &nbsp   <i class="fas fa-mars"></i>&nbsp <?php echo e($user->age()); ?> y.o.</p>
                </div>
            </div>
        </div>