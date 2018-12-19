<div class="wrap">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class=" col-6 col-lg-3 Users knopka">
                    <img class="logo" src="img/logo.png" alt="Logo site">
                    <a href="">Users</a>
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
            <div class="row link">
                <div class="col-lg-1 text-left Users knopka">
                    <a class="link1" href="">Users</a>
                </div>

            </div>
        </div>
    </div>
</div>